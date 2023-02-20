<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index(Request $request) 
    {
        $page = $request->get('page');
        return view('admin/recipes/index', [
            'page' => $page
        ]);
    }

    public function show($id)
    {
        echo 'Show ' . $id;
    }
}
