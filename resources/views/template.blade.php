<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/Style.css') }}" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    </style>

</head>

<body>
    <div class="container">
        <div class="Menu">
            <p> <a href="/main"> Главная </a> </p>
            <p> <a href="/about"> Обо мне </a> </p>
            <p> <a href="/interests"> Мои интересы </a> </p>
            <p> <a href="/study"> Учеба </a> </p>
            <p> <a href="/photoAlbum"> Фотоальбом </a> </p>
            <p> <a href="/contact"> Контакт </a> </p>
            <p> <a href="/test"> Тест по дисциплине </a> </p>
            <p> <a href="/history"> История просмотра </a> </p>
            <p> <a href="/guestbook"> Гостевая книга </a> </p>
            <p> <a href="/uploadguestbook"> Загрузка книги </a> </p>
            <p> <a href="/blog"> Редактор блога </a> </p>
            <p> <a href="/myblog"> Мой блог </a> </p>
        </div>
        @yield('content')
    </div>

    <script src="js/History.js"></script>
    <script src="js/LocalHistory.js"></script>
</body>

</html>