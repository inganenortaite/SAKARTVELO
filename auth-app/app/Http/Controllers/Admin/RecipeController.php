<?php
 
namespace App\Http\Controllers\Admin;
 
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rules\File;
 
class RecipeController extends Controller
{
    public function index(Request $request): View
    {
        $recipes = Recipe::query();
 
        if ($request->query('category_id')) {
            $recipes->where('category_id', '=', $request->query('category_id'));
        }

        if ($request->query('name')) {
            $recipes->where('name', 'like', '%' . $request->query('name') . '%');
        } 
 
        $categories = Category::where('is_active', '=', 1)->get();
        $ingredients = Ingredient::where('is_active', '=', 1)->get();
 
        return view('admin/recipes/index', [
            'recipes' => $recipes->paginate(10),
            'categories' => $categories,
            'ingredients' => $ingredients,
            'category_id' => $request->query('category_id'), 
            'name' => $request->query('name'), 
        ]);
    }
 
    public function store(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required|min:5|max:2000',
                'image' => [
                    'required',
                    File::types(['jpg', 'wav', 'png'])
                        ->min(10)
                        ->max(12*1024)
                ],
            ]
        );
 
        $recipe = Recipe::create($request->all());
 
        $image = $request->file('image');
        if ($image){
            $path = $image->store('recipe_images'); 
            $recipe->image = $path; 
            $recipe->save();
        }
        
        $recipe->ingredients()->attach($request->post('ingredient_id'));
 
        return redirect('admin/recipes/index')
            ->with('success', 'New recipe successfully added!');
    }
 
    public function create(): View
    {
        $categories = Category::all();
        $ingredients = Ingredient::all();
 
        return view('admin/recipes/create', [
            'categories' => $categories,
            'ingredients' => $ingredients]);
    }

    public function edit(int $id, Request $request)
    {
        $categories = Category::all();
        $ingredients = Ingredient::all();
        $recipe = Recipe::find($id);
        if ($recipe === null) {
            abort(404);
        }
 
        if ($request->isMethod('post')) {
            $request->validate(
                ['name' => 'required|min:3|max:20']
            );
 
            $recipe->fill($request->all());
            $recipe->ingredients()->detach();
            $recipe->ingredients()->attach($request->post('ingredient_id'));
            $recipe->is_active = $request->post('is_active', false);

            $image = $request->file('image');
            if ($image){
                $path = $image->store('recipe_images'); 
                $recipe->image = $path;
            }

            $recipe->save();
 
            return redirect('admin/recipes/index')->with('success', 'Recipe updated successfully!');
        }

        return view('admin/recipes/edit', compact('categories','ingredients','recipe'));
    }
 
    public function delete(int $id)
    {
        $recipe = Recipe::find($id);
        if ($recipe === null) {
            abort(404);
        }
        $recipe->delete();
        
        return redirect('admin/recipes/index')->with('success', 'Recipe removed successfully!');
    }
}
