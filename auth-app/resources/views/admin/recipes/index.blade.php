@extends('components.layout')
 
@section('title', 'Recipes')
 
@section('content')
    <h1>Sakartvelo Food Recipes</h1>
 
    @include('components.alert.success_message')
 
<div class="row">
    <form action="{{ url('admin/recipes/index') }}" method="get"> 
        <div class="col-12">    
            <label class="form-label">Recipe Name:</label>
            <input type="text" name="name" value="{{ $name }}" class="form-control" placeholder="Type Recipe Name">
        </div>
        
        <div class="col-12 mt-2">        
            <button type="submit" class="btn btn-info">Filter</button>  
            <a href="{{ url('admin/recipes/index') }}" class="btn btn-info">Clear</a>
        </div>
    </form>
 
    <div class="row">
        <div class="col"> <a href="{{ url('admin/recipes/create') }}" class="btn btn-primary">Create</a> </div>
    </div>
 
    <table class="table" >
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th>Image</th>
            <th scope="col">Category</th>
            <th scope="col">Ingredients</th>
            <th scope="col">Description</th>
            <th scope="col" width="100">Active</th>
            <th scope="col" width="100">Edit</th>
            <th scope="col" width="100">Delete</th>
        </tr>
        @foreach($recipes as $recipe)
        <tr>
            <th scope="row">{{ $recipe->id }}</th>
            <td class="list-group-flush">
                <a href="{{ url('recipe', ['id'=> $recipe->id]) }}" class="list-group-item list-group-item-action">{{ $recipe->name }}</a>
            </td>
            <td>
            @if ($recipe->image)
                <img style="max-height: 150px;" src="{{ asset($recipe->image) }}">
            @else
                No image
            @endif
            </td>
            <td>
                @if($recipe->category)
                {{ $recipe->category->name }}
                @endif
            </td>
            <td>
            @if($recipe->ingredients)
                @foreach($recipe->ingredients as $ingredient)
                    {{ $ingredient->name }} <br>
                @endforeach
            @endif
            </td>
                <td>{{ Str::limit($recipe->description, 350) }}  
                <a href="{{  url('recipe', ['id'=> $recipe->id])  }}" class="text-reset">read more</a>  
            </td>
                <td>{{ $recipe->is_active }}</td>
            <td>
                <a href="{{ route('admin.recipe.edit', ['id' => $recipe->id]) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('admin.recipe.delete', ['id' => $recipe->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
    <div class="row">
        <div class="col">
            {{ $recipes->links()}}
        </div>
    </div>
</div>
@endsection