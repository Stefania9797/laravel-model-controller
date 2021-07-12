<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <style>
            .movies{
                display:flex;
                flex-wrap:wrap;
                justify-content: space-between;
            }
            .movie{
                border: 2px solid black;
                margin: 10px 20px;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <h1>Movies</h1>
        <div class="movies">
            @foreach ($movies as $movie)
            <div class="movie">
                <h2>{{ $movie->title }}</h2>
                <p><strong>Original title:</strong>{{ $movie->original_title }}</p>
                <p><strong>Nationality:</strong> {{ $movie->nationality }}</p>
                <p><strong>Date:</strong> {{ $movie->date }}</p>
                <p><strong>Vote:</strong> {{ $movie->vote }}</p>
            </div>
            @endforeach
        </div>
    </body>
</html>
