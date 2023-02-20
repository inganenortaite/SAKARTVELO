<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::all();

        return view('admin/categories/index', [
            'categories' => $categories
        ]);
    }

    public function show(int $id): View
    {
        $category = Category::find($id);
            if ($category === null) {
            abort(404);
        }

        return view('admin/categories/show', [
            'category' => $category
        ]);
    }

    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        $request->validated();

        Category::create($request->all());

        return redirect('categories')
            ->with('success', 'Category created successfully!');
    }
}
