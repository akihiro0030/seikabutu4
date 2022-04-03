<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Game </title>
    </head>
    <body>
        <h1>Game Blog</h1>
        <form action="{{ url('/games')}}" method="POST">
           @csrf
            <div class="name">
              
                <input type="text" name="game[name]" placeholder="ゲーム名"/>
            </div>
                
               <div class="price"> 
               <h1>価格</h1>
                <textarea name="game[price]" placeholder="価格を入力"></textarea>
                </div>
                 <div class="over_review"> 
                  <h1>あらすじ</h1>
                <textarea name="game[over_review]" placeholder="あらすじを入力"></textarea>
                </div>
                <div class="category">
                  <h2>Category</h2>
                    <select name="game[category_id]">
                 @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                            </select>
                    </div>
               
   
              
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
