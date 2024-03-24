<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        // Méthode pour afficher le formulaire de création d'une nouvelle catégorie
    }

    public function store(Request $request)
    {
        // Méthode pour sauvegarder une nouvelle catégorie dans la base de données
    }
}
