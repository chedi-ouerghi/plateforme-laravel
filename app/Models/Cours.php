<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $fillable = [
        'Titre', 'NomInstructeur', 'Description', 'Duree', 'NiveauDifficulte',
        'NombreLecons', 'NombreQuizz', 'Prix', 'NombreEtudiantsAcceptes',
        'DateCreation', 'DateMiseAJour', 'InstructeurId', 'CategorieId'
    ];

    public function instructor()
    {
        return $this->belongsTo('App\Models\Instructor', 'InstructeurId');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'CategorieId');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'CoursId');
    }

    public function students()
    {
        return $this->belongsToMany('App\Models\Student', 'cours_etudiant', 'CoursId', 'EtudiantId');
    }

    public function feedbacks()
    {
        return $this->hasMany('App\Models\Feedback', 'CoursId');
    }
}
