@extends('layouts.app')

@section('content')
<div class="container login-form">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h3>Изменение ребенка физ. лица</h3>

            <form class="form-horizontal" role="form" method="POST" action="{{ url('kids/save') }}">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $obj->id }}" />

                <div class="form-group{{ $errors->has('f_id') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Родитель</label>

                    <div class="col-md-6">
                        <select class="form-control" name="f_id">
                            <option value="">Не определен</option>
                            @foreach($faces as $f)
                            <option value="{{ $f->id }}" {{ (!empty(old('f_id')) && old('f_id') == $f->id) || $obj->f_id == $f->id ? 'selected' : '' }}>{{ $f->full_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Фамилия</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="surname" value="{{ !empty(old('surname')) ? old('surname') : $obj->surname }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Имя</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="name" value="{{ !empty(old('name')) ? old('name') : $obj->name }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('patronymic') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Отчество</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="patronymic" value="{{ !empty(old('patronymic')) ? old('patronymic') : $obj->patronymic }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Дата рождения</label>

                    <div class="col-md-2">
                        <input type="text" class="form-control datepicker" name="birthday" value="{{ !empty(old('birthday')) ? old('birthday') : $obj->birthday }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Пол</label>

                    <div class="col-md-6">
                        <select class="form-control" name="gender">
                            <option value="">Не определен</option>
                            <option value="1" {{ (!empty(old('gender')) && old('gender') == 1) || $obj->gender == 1 ? 'selected' : '' }}>Мужской</option>
                            <option value="2" {{ (!empty(old('gender')) && old('gender') == 2) || $obj->gender == 2 ? 'selected' : '' }}>Женский</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Сохранить
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
