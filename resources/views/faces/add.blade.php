@extends('layouts.app')

@section('content')
<div class="container login-form">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h3>Добавление физ. лица</h3>

            <form class="form-horizontal" role="form" method="POST" action="{{ url('faces/save') }}">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="0" />

                <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Фамилия</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="surname" value="{{ old('surname') }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Имя</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('patronymic') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Отчество</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="patronymic" value="{{ old('patronymic') }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Дата рождения</label>

                    <div class="col-md-2">
                        <input type="text" class="form-control datepicker" name="birthday" value="{{ old('birthday') }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Пол</label>

                    <div class="col-md-6">
                        <select class="form-control" name="gender">
                            <option value="">Не определен</option>
                            <option value="1" {{ old('gender') == 1 ? 'selected' : '' }}>Мужской</option>
                            <option value="2" {{ old('gender') == 2 ? 'selected' : '' }}>Женский</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Создать
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
