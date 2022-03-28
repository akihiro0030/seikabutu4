<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Game </title>
    </head>
    <body>
        <h1>Game Blog</h1>
        <form action="/games" method="POST">
           @csrf
           <div class="tittle">
            <div class="name">
                <h2>name</h2>
                <input type="text" name="game[name]" placeholder="ゲーム名"/>
            </div>
                
               <div class="price">  
                <textarea price="game[price]" placeholder="価格を入力"></textarea>
                </div>
            </div>
            </div>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
