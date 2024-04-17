@extends('template')

@section('content')
<link rel="stylesheet" type="text/css" href="css/UploadGuestBook.css">

<title>Загрузка книги</title>

    <div class="Information">
        <div class = "header">
            <h1 id="Name"> Загрузка книги </h1>
        </div>
<form method="POST" action="/uploadguestbook" enctype="multipart/form-data">
    @csrf
    <input type="file" name="messages_file">
    <button type="submit">Загрузить</button>
</form>
</div>
@if(session('success'))
    <div class="message success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="message error">
        {{ session('error') }}
    </div>
@endif
  

@endsection