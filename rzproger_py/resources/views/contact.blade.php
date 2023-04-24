@extends('layouts.app')
@section('title-box')
    Страница Контактов
@endsection

@section('content')
    <h1>Контакты</h1>
<form action="{{route('contact-form')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name"></label>
        <input type="text" name="name" placeholder="введите имя" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="email"></label>
        <input type="text" name="email" placeholder="введите почту" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="subject"></label>
        <input type="text" name="subject" placeholder="введите тему сообщения" id="subject" class="form-control">
    </div>

    <div class="form-group">
        <label for="message"></label>
        <textarea name="message" id="message" class="form-control" placeholder="Напишите сообщения" cols="30" rows="10"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-success">Отправить</button>
</form>
@endsection
