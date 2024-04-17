@extends('template')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/MainPage.css') }}" />
<title>Главная</title>

    <div class="Information">
        <div class = "header">
            <h1 id="Name"> Главная страница </h1>
        </div>
        <img src="photos/MainCat.jpg" alt="Прекрасный человек" />
        <p> Студент: Полбицев Андрей</p>
        <p> Группа: ПИ/б-21-1-о</p>
        <p> Первая лабораторная работа</p>
    </div>
@endsection
