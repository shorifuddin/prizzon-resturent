<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function menusinfo(){
        return $this->belongsTo('App\Models\Menus', 'category_name', 'nemus_category');
    }
    use HasFactory;
}
