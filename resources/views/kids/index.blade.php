@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Дети физ. лиц
                <a class="btn btn-primary" href="{{ url('kids/add') }}" role="button"><i class="glyphicon glyphicon-plus-sign"></i> Добавить нового</a>
            </h3>

            @if (!empty($objs))
            <table class="table table-hover">
                <tr>
                    <th>ФИО</th>
                    <th>ФИО родителя</th>
                    <th>Дата рождения</th>
                    <th>Пол</th>
                    <th></th>
                </tr>
                @foreach ($objs as $o)
                <tr>
                    <td>
                        {{ $o->full_name }}
                    </td>
                    <td>
                        {{ $o->parent->full_name }}
                    </td>
                    <td>
                        {{ !empty($o->birthday) ? date("d.m.Y", strtotime($o->birthday)) : 'Не задана' }}
                    </td>

                    <td>
                        {{ __('crud.gender_' . $o->gender) }}
                    </td>
                    <td width="100" class="text-center">
                        <a class="btn btn-info btn-sm" href="{{ url('kids/edit/' . $o->id) }}" role="button" title="Изменить"><i class="glyphicon glyphicon-pencil"></i></a>

                        <a class="btn btn-danger btn-sm confirm-delete" href="{{ url('kids/delete/' . $o->id) }}" role="button" title="Удалить" data-info="{{ $o->full_name }}"><i class="glyphicon glyphicon-remove-sign"></i></a>
                    </td>
                </tr>
                @endforeach
            </table>
            @endif


        </div>
    </div>
</div>
@endsection
