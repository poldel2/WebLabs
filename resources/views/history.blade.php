@extends('template')

@section('content')
<link rel="stylesheet" type="text/css" href="css/Interests.css">
<title>История</title>
<link rel="stylesheet" type="text/css" href="css/History.css">

<div class="Information">
    <div class="header">
        <h1 id="Name"> История </h1>
    </div>


    <h2>История текущего сеанса</h2>
    <table id="sessionHistoryTable">
        <thead>
            <tr>
                <th>Страница</th>
                <th>Количество просмотров</th>
            </tr>
        </thead>
        <tbody>
            <!-- Здесь будет генерироваться содержимое таблицы с помощью JavaScript -->
        </tbody>
    </table>

    <h2>История за все время</h2>
    <table id="allTimeHistoryTable">
        <thead>
            <tr>
                <th>Страница</th>
                <th>Количество просмотров</th>
            </tr>
        </thead>
        <tbody>
            <!-- Здесь будет генерироваться содержимое таблицы с помощью JavaScript -->
        </tbody>
    </table>


</div>
@endsection