<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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
    public function show(Ingredient $ingredient): View
    {
        return view('admin/ingredients/show', compact('ingredient'));
    }

    public function store(Request $request): RedirectResponse
    {

        $request->validate(
            [
                'name' => 'required|max:20',
                'surname' => 'required|max:20',
                'country' => 'required|max:20',
                'birthday' => 'required|date',
            ]
        );

        Ingredient::create($request->all());
    }
}
