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
        <div class="col-sm-4" style="padding:20px 0; padding-left:0px;">
             <form class="form-inline" action="{{url('/search')}}">
              <div class="form-group">
              <input type="text" name="keyword" class="form-control" placeholder="名前を入力してください">
               </div>
                <input type="submit" value="検索" class="btn btn-info">
</form>
       
</div>
</div>
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