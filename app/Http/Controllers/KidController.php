<?php
/**
 * @desc CRUD для управления сущностью "Ребенок физ.лица"
 *
 * @author Krasilnikov Andrey <z010107@gmail.com>
 */

namespace App\Http\Controllers;

use App\Face;
use App\Kid;

class KidController extends CrudController
{
    protected $model = Kid::class;

    protected $url = 'kids';

    protected $listOrder = 'id';

    protected $validationRule = [
        'id' => 'required',
        'f_id' => 'required',
        'surname' => 'required',
        'name' => 'required',
        'patronymic' => 'required',
        'birthday' => 'required',
        'gender' => 'required|in:1,2',
    ];

    protected $fields = [
        'f_id' => null,
        'full_name' => ['surname', 'name', 'patronymic'],
        'surname' => '',
        'name' => '',
        'patronymic' => '',
        'birthday' => null,
        'gender' => null,
    ];

    /**
     * @desc Отображение формы создания сущности
     *
     * @return mixed
     */
    public function add()
    {
        $this->data['faces'] = Face::orderBy('id', 'asc')->get();
        return parent::add();
    }

    /**
     * @desc Отображение формы редактирования сущности
     *
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $this->data['faces'] = Face::orderBy('id', 'asc')->get();
        return parent::edit($id);
    }
}
