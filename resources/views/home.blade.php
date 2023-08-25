@extends('layouts.app')

@section('title-block')
    Главная страница
@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi illum alias voluptates, hic eveniet ab tenetur ad laudantium sed vero laborum, praesentium mollitia explicabo? Possimus perspiciatis amet modi dicta corrupti.
    </p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection