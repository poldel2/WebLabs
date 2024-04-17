@extends('template')

@section('content')
<link rel="stylesheet" type="text/css" href="css/BlogPost.css">
    <div class="Information">
        <div class = "header">
            <h1 id="Name"> Мой Блог </h1>
        </div>
        
        <div id="postList">
            @foreach ($posts as $post)
                <div class="postTitle" data-id="{{ $post->post_id }}">
                    <h3>{{ $post->title }}</h3>
                    <button class="expandButton">⬇️</button>
                    <div class="postContent" style="display: none;">
                        <img class="postImage">
                        <p class="postDescription"></p>
                    </div>
                </div>
            @endforeach
        </div>
        
        {{ $posts->links() }}

        <p> <a href="/uploadblog"> Загрузить блог </a> </p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.expandButton').click(function() {
            var id = $(this).parent().data('id');
            var content = $(this).siblings('.postContent');
            if (content.is(':visible')) {
                content.slideUp();
            } else {
                $.get('/myblog/' + id, function(data) {
                    content.find('.postImage').attr('src', 'data:image/jpeg;base64,' + data.image);
                    content.find('.postDescription').text(data.content);
                    content.slideDown();
                });
            }
        });
    });
    </script>

@endsection
