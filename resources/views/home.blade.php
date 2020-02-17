@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Личный кабинет</div>
                <div class="panel-body">
                    <div class="container">
                        <div class="row">
                            @if (!empty($model))
                                <div class="col-md-2">
                                    <img src="/storage/{{ $model->photo }}" height="150px">
                                </div>
                                <div class="col-md-6">
                                    <p><b>Фамилия:</b> {{ $model->surname }}</p>
                                    <p><b>Имя:</b> {{ $model->name }}</p>
                                    <p><b>Отчество:</b> {{ $model->middlename }}</p>
                                    <p><b>Дата рождения:</b> {{ $model->birthday }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
