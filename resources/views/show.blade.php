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
       <div class='game'>
           <h2 class='name'>{{$game->name}}</h2>
           <p class='over_review'>{{$game->over_review}}</p>
           <p class='price'>{{$game->price}}</p>
            <p class='category_name'>{{$game->category->name}}</p>
          <div class="footer">
              <a href="/games">戻る</a>
              
            <a href="/games/{{$game->id}}/review/create">レビューする</a>  
          </div>
            @foreach($game->Review_comments as $Review_comment)
            <div class'reviewes'>
               <h2 class='tittle'>{{ $Review_comment->tittle}}</h2> 
                <p class='body'>{{$Review_comment->body}}</p>
            </div>
            @endforeach
    </body>
</html>