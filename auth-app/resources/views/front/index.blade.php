@section('title', 'All Recipes')

@extends('components.min_layout')

@section('content')

<h1>All Recipes</h1>

<div>
    <div>
        <form action="{{ url('recipes') }}" method="get">

            <div class="col-12">    
                <label class="form-label">Recipe's Name</label>
                <input type="text" name="name" value="{{ $name }}" class="form-control" placeholder="Type Recipe Name">
            </div>

            <div class="col-12">        
                <label class="form-label">Recipe's Category</label>        
                <select name="category_id" class="form-control"> 
                    <option value="" disabled selected hidden>Choose Category</option>           
                    @foreach($categories as $category)
                    <option @if($category->id == $category_id) selected 
                    @endif
                    value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>  
            </div>
           
            <div class="col-12 mt-2">        
                <button type="submit" class="btn btn-dark">Filter</button>  
                <a href="{{ url('recipes') }}" class="btn btn-outline-dark">Clear All Filters</a></div>  
            </div>
        </form>
    </div>
    <div class="row">
        @foreach($recipes as $recipe)
        <div class="col-3 mb-3">
            <div class="card">
                <div class="card-body">
                    @if ($recipe->image)
                        <a href="{{ url('recipe', ['id'=> $recipe->id]) }}"><img class="card-img-top" src="{{ asset($recipe->image) }}"></a>
                    @else
                        No image
                    @endif
                    <h4 class="card-title text-center text-uppercase"><a href="{{ url('recipe', ['id' => $recipe->id]) }}" class="list-group-item list-group-item-action">{{ $recipe->name }}</a></h4>
                    <h6 class="card-subtitle text-muted text-center">
                        @if($recipe->category)
                            {{ $recipe->category->name }}
                        @endif
                    </h6>
                    <a class="link-success" href="{{ url('recipe', ['id'=> $recipe->id]) }}">Try To Make {{ $recipe->name }}</a>  
                </div>
            </div>
        </div>
        @endforeach
        <div class="row">
            <div class="col">
                {{ $recipes->links()}}
            </div>
        </div>
    </div>
</div>
@endsection