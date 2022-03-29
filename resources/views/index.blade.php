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
        <div style="text-align: center">
        <div class='games'>
            @foreach ($games as $game)
                <div class='game'>
                    <h2 class='names'>
                    <a href="/games/{{ $game->id }}">{{ $game->name }}</a>
                    
</h2>
                    
                   
                </div>
            @endforeach
            </div>
        </div>
    </body>
</html>