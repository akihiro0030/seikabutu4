<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Game;
use App\Review_comments;
use Illuminate\Support\Facades\Auth;
class Review_commentsController extends Controller
{
    public function _construct()
{
    $this->middleware('auth');
}
public function create(Game $game)
{
    return view('/review_comment')->with(['game'=>$game]);
}
public function store(Request $request)
{
$Review_coment=new Review_comments();
$Review_coment->tittle=$request->tittle;
$Review_coment->body=$request->body;
$Review_coment->rate=$request->rate;
$Review_coment->game_id=$request->game_id;
$Review_coment->user_id=Auth::user()->id;
$Review_coment->save();

return redirect('/');
}

}
