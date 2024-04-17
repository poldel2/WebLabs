@extends('template')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Результаты проверки</title>
    <link rel="stylesheet" type="text/css" href="css/Test.css">
    <link rel="stylesheet" type="text/css" href="css/modalTest.css">
</head>
<body>
    <div class="Information">
        <div class="header">
            <h1 id="Name">Результаты проверки</h1>
        </div>
        <div class="form-group">
            <p>Фамилия Имя Отчество: {{ session('fullName') }}</p>
        </div>
        <div class="form-group">
            <p>Результаты проверки:</p>
            <ul>
                @foreach (session('results') as $field => $result)
                    <li>{{ $field }}: {{ $result ? 'Ваш ответ верный' : 'Ваш ответ неверный' }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <script src="js/modalTest.js"></script>
</body>
</html>
@endsection
