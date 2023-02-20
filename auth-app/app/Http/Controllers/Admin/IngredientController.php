<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index(): View
    {
        $ingredients = Ingredient::all();

        return view('admin/ingredients/index', [
            'ingredients' => $ingredients
        ]);
    }
}
