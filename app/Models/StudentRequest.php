<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentRequest extends Model
{
    protected $fillable = ['EtudiantId', 'CoursId', 'Statut'];

    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'EtudiantId');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course', 'CoursId');
    }
}
