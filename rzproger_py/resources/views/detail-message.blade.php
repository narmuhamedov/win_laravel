@extends('layouts.app')
@section('title-box'){{$data->subject}}@endsection

@section('content')
    <h1>{{$data->subject}}</h1>
        <div class="alert alert-info">
            <p>{{$data->message}}</p>
            <p>{{$data->email}}</p>
            <p><small>{{$data->created_at}}</small></p>
            <a href="#"><button class="btn btn-primary">Изменить</button></a>
            <a href="#"><button class="btn btn-primary">Удалить</button></a>
        </div>
@endsection
