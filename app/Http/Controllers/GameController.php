<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Game;
use App\Category;

class GameController extends Controller
{
   public function index(Game $game, Category $category)
    {   
        return view('index')->with(['games'=>$game->get(), 'categories'=>$category->get()]);
    }

    public function create(Category $category)
    {
        return view('/create')->with(['categories'=> $category->get()]);
    }
    public function show(Game $game)
    {
        return view('/show')->with(['game' => $game]);
    }


    public function store(Request $request, Game $game)
{
    $input = $request['game'];
    
    $game->fill($input)->save();
    return redirect('/games/' . $game->id);
}
    public function search(Request $request) {
      $keyword = $request->keyword;
      if(!empty($keyword)){
      $query = Game::query();
      $games = $query->where('name','like', '%' .$keyword. '%')->get();
      $message = "「". $keyword."」を含む名前の検索が完了しました。";
      return view('/search')->with([
        'games' => $games,
        'message' => $message,
        'keyword' => $keyword
        
      ]);}
      else {
      $message = "検索結果はありません。";
      return view('/search')->with('message',$message);
      
    }


}


  
}

