<?php
/**
 * @desc CRUD для управления сущностью "Физ. лицо"
 *
 * @author Krasilnikov Andrey <z010107@gmail.com>
 */

namespace App\Http\Controllers;

use App\Face;

class FaceController extends CrudController
{
    protected $model = Face::class;

    protected $url = 'faces';

    protected $listOrder = 'id';

    protected $validationRule = [
        'id' => 'required',
        'surname' => 'required',
        'name' => 'required',
        'patronymic' => 'required',
        'birthday' => 'required',
        'gender' => 'required|in:1,2',
    ];

    protected $fields = [
        'full_name' => ['surname', 'name', 'patronymic'],
        'surname' => '',
        'name' => '',
        'patronymic' => '',
        'birthday' => null,
        'gender' => null,
    ];
}
