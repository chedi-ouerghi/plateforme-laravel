<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use App\Models\Cours;

class CourseController extends Controller
{
public function index()
{
    $courses = Cours::all();
    return view('cours.cours', compact('courses')); 
}


    // public function show($id)
    // {
    //     $cours = Cours::findOrFail($id);
    //     return view('cours.show', compact('cours')); // Assurez-vous d'utiliser le bon nom de vue ici
    // }
}
