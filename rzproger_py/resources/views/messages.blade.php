@extends('layouts.app')
@section('title-box')Все сообщения@endsection

@section('content')
<h1>Все сообщения из Базы</h1>

@foreach($data as $element)
<div class="alert alert-info">
<h3>{{$element->subject}}</h3>
    <p>{{$element->email}}</p>
    <p><small>{{$element->created_at}}</small></p>
    <a href="{{route('contact-detail-one', $element->id)}}"><button class="btn btn-primary">Детальная информация</button></a>
</div>
@endforeach

@endsection
