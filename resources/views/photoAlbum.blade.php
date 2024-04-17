@extends('template')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Фотоальбом</title>
    <link rel="stylesheet" type="text/css" href="css/PhotoAlbum.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <div class="Information">
        <div class="header">
            <h1 id="Name">Фотоальбом</h1>
        </div>
        <div class="gallery">
            <table>
                @php
                    $row = "<tr>\n";
                    $titleRow = "<tr>\n";
                    foreach ($data as $i => $photo) {
                        $row .= "<td>\n";
                        $row .= "<img src='{$photo['imgSrc']}' alt='{$photo['imgAlt']}' class='img-cell'>\n";
                        $row .= "<span class='tooltiptext'>{$photo['title']}</span>\n";
                        $row .= "</td>\n";

                        $titleRow .= "<td>{$photo['title']}</td>\n";

                        if (($i + 1) % 3 === 0 || $i === count($data) - 1) {
                            $row .= "</tr>\n";
                            $titleRow .= "</tr>\n";
                            echo $row;
                            echo $titleRow;
                            $row = "<tr>\n";
                            $titleRow = "<tr>\n";
                        }
                    }
                @endphp
            </table>
        </div>
    </div>
    <script src="js/photoAlbum.js"></script>
</body>
</html>
@endsection
