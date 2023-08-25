@extends('layouts.app')

@section('title-block')
    Страница контактов
@endsection

@section('content')
    <h1>Страница контактов</h1>

    

    <form action="{{ route('contact-form') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Введите имя" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Сообщения</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите Сообщения"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection
