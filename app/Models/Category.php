<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['NomCategorie', 'Image'];

    public function courses()
    {
        return $this->hasMany('App\Models\Course', 'CategorieId');
    }
}
