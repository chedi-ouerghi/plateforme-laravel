<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index()
    {
        $instructors = Instructor::all();
        return view('admin.instructors.index', compact('instructors'));
    }

    public function create()
    {
        // Méthode pour afficher le formulaire de création d'un nouvel instructeur
    }

    public function store(Request $request)
    {
        // Méthode pour sauvegarder un nouvel instructeur dans la base de données
    }
}
