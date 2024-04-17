@extends('template')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Мои интересы</title>
    <link rel="stylesheet" type="text/css" href="css/Interests.css">
</head>
<body>
    <div class="links">
        <script src="js/Interests.js"></script>
    </div>
    <div class="Information">
        <div class="header">
            <h1 id="Name">Мои интересы</h1>
        </div>
        @foreach ($data['sections'] as $section)
            <section id="{{ $section['id'] }}">
                <h2>{{ $section['title'] }}</h2>
                @php
                    $counter = 1;
                @endphp
                @foreach ($section['items'] as $item)
                    <h3 id="{{ $section['id'] . $counter }}">{{ $item['title'] }}</h3>
                    <p type="Text">{{ $item['text'] }}</p>
                    @php
                        $counter++;
                    @endphp
                @endforeach
            </section>
        @endforeach
    </div>
</body>
</html>
@endsection
