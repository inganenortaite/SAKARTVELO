<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();

        return view('front/index', [
            'recipes' => $recipes
        ]);    
    }

    public function show(int $id)
    {
        $recipe = Recipe::find($id);
        if ($recipe === null) {
            abort(404);
        }
        return view('front/show', [
            'recipe' => $recipe
        ]);
    }
}
