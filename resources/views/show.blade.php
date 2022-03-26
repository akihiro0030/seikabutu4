<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
     <h1>Blog Name</h1>
     
   <div style="text-arign: center"></div>
                   <div class='games'>
                    <h2 class='title'>
                   
                    
                    <h2 class='name'>{{ $game->name }}</h2>
                    <p class='price'>{{ $game->price}}</p>
                </div>
                    <p class='over_review'>{{ $game->over_review}}</p>
                </div>
                </div>
             <div class="back">[<a href="/">back</a>]</div>
        </div>
    </body>
</html>