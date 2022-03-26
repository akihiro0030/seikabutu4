<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GameController extends Controller
{
public function index(Game $game)
{
    return view('index')->with(['games'=>$game->get()]);
}
public function create()
{
    return view('/create');
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

}
