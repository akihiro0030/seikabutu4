<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='games'>
            @foreach ($games as $game)
                <div class='games'>
                    <h2 class='title'>
                    <a href="/games/{{ $game->id }}">{{ $game->name }}</a></h2>
                    <h2 class='name'>{{ $game->name }}</h2>
                    <p class='over_review'>{{ $game->over_review}}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>