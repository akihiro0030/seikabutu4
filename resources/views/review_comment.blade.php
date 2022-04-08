<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Game </title>
    </head>
    <body>
        <h1>Game Blog</h1>
         <form action="/games/{{ $game->id }}" method="POST">
            {{csrf_field()}}
            <input value="{{ $game->id }}" type="hidden" name="game_id" />
            <input value="{{ Auth::id() }}" type="hidden" name="user_id" />
            <div class="tittle">
                 <input type="text" name="tittle"placeholder="タイトル"
            </div>
            <div class="body">
                
            </div>
            <textarea name="body" class="sample3"
            cols="40"rows"8">
                レビューを書いて
            </textarea>
            
            <select name="rate">
               
               <option name="rate">1<option>
               <option name="rate">2<option>
               <option name="rate">3<option>
            <option name="rate">4<option>
             <option name="rate">5<option>
                
            </select>
            <input type="submit" value="保存" >
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            </div>
            
            
        </form>
        
        
       
        