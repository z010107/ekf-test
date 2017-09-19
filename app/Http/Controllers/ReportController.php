<?php
/**
 * @desc Базовый клас для CRUD контроллеров
 *
 * @author Krasilnikov Andrey <z010107@gmail.com>
 */

namespace App\Http\Controllers;

use App\Face;
use App\Http\Requests;
use App\Service;
use Validator;
use Session;
use DB;

class ReportController extends Controller
{
    protected $data = [];

    /**
     * @desc Отображение отчета сотрудников > 20
     *
     * @return mixed
     */
    public function reportFaces()
    {
        $this->data['objs'] = Face::select(DB::raw('full_name, YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(birthday))) as age'))
            ->whereRaw('YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(birthday))) > 20')
            ->orderBy('id', 'asc')
            ->get();

        return view('report/faces', $this->data);
    }

    /**
     * @desc Отображение отчета дети < 7
     *
     * @return mixed
     */
    public function reportKids()
    {
        $this->data['objs'] = Face::select('faces.full_name', DB::raw('count(t2.id) as child_count'))
            ->leftJoin('kids as t2', function ($join) {
                $join->on('faces.id', '=', 't2.f_id')
                    ->whereRaw('YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(t2.birthday))) < 7');
            })
            ->orderBy('faces.id', 'asc')
            ->groupBy('faces.full_name')
            ->get();

        return view('report/kids', $this->data);
    }
}