@extends('template')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/UploadBlog.css') }}" />
<title>Загрузка блока</title>

    <div class="Information">
        <div class = "header">
            <h1 id="Name"> Загрузка блока</h1>
        </div>
        <form method="POST" action="/uploadblog" enctype="multipart/form-data">
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
    </div>
@endsection
