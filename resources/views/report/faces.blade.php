@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Отчет сотрудников > 20</h3>

            @if (!empty($objs))
            <table class="table table-hover">
                <tr>
                    <th>ФИО</th>
                    <th>Возраст</th>
                </tr>
                @foreach ($objs as $o)
                <tr>
                    <td>
                        {{ $o->full_name }}
                    </td>
                    <td>
                        {{ $o->age }}
                    </td>

                </tr>
                @endforeach
            </table>
            @endif


        </div>
    </div>
</div>
@endsection
