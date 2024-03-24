<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['Nom', 'Prenom'];

    public function courses()
    {
        return $this->belongsToMany('App\Models\Course', 'cours_etudiant', 'EtudiantId', 'CoursId');
    }

    public function requests()
    {
        return $this->hasMany('App\Models\StudentRequest', 'EtudiantId');
    }
}
