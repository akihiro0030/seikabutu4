<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review_comments extends Model

{
    
     protected $fillable=[
      'title','body','rate',
        ];
   public function game()
   {
       return $this->belongsTo('App\game','game_id');
   }
   public function User()
   {
       return $this->BelongsTo('App\User','user_id');
   }
}
