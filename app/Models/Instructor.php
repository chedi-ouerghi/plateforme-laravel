<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = ['Nom', 'Prenom'];

    public function courses()
    {
        return $this->hasMany('App\Models\Course', 'InstructeurId');
    }
}
