<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
    'name','price','over_review','category_id','zyannr'
    
];


public function category()
{
    return $this->belongsTo('App\Category');
}
}
?>