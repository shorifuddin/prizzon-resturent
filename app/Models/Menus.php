<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    public function categoryinfo(){
        return $this->belongsTo('App\Models\Category', 'menus_category', 'category_name');
    }
    use HasFactory;
}
