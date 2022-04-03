<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function games()   
{
    return $this->hasMany('App\Game');  
}

public function getByCategory(int $limit_count = 5)
{
     return $this->games()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}
