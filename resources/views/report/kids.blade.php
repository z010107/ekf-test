@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Отчет дети < 7</h3>

            @if (!empty($objs))
            <table class="table table-hover">
                <tr>
                    <th>ФИО</th>
                    <th>Количество детей</th>
                </tr>
                @foreach ($objs as $o)
                <tr>
                    <td>
                        {{ $o->full_name }}
                    </td>
                    <td>
                        {{ $o->child_count }}
                    </td>
                </tr>
                @endforeach
            </table>
            @endif


        </div>
    </div>
</div>
@endsection
