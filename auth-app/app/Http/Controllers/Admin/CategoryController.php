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
        $categories = Category::paginate(10);

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

        return redirect('admin/categories/index')
            ->with('success', 'Category created successfully!');
    }

    public function create(): View|RedirectResponse
    {
        $categories = Category::where('id', null)->get();

        return view('admin/categories/create', [
            'categories' => $categories
        ]);
    }
 
    public function edit(int $id, Request $request)
    {
        $category = Category::find($id);
        if ($category === null) {
            abort(404);
        }
 
        if ($request->isMethod('post')) {
            $request->validate(
                ['name' => 'required|min:3|max:20']
            );
 
            $category->fill($request->all());
            $category->is_active=$request->post('is_active', false);
            $category->save();
 
            return redirect('admin/categories/index')->with('success', 'Category updated successfully!');
        }

        return view('admin/categories/edit', compact('category'));
    }
 
    public function delete(int $id)
    {
        $category = Category::find($id);
        if ($category === null) {
            abort(404);
        }
        $category->delete();
        
        return redirect('admin/categories/index')->with('success', 'Category removed successfully!');
    }
}

