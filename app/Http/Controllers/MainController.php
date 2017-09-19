<?php
/**
 * @desc Контроллер для главной страницы
 *
 * @author Krasilnikov Andrey <z010107@gmail.com>
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Service;
use App\Discount;
use Validator;
use Session;

class MainController extends Controller
{
    protected $data = [];

    /**
     * @desc Отображение главной страницы
     *
     * @return mixed
     */
    public function index()
    {
        return view('main', $this->data);
    }
}