@extends('components.layout')

@section('title', 'Categories')

@section('content')

<h1>{{  $category->name  }} Category</h1>
<div class="card">
    <div class="card-header">
        {{  $category->name  }}
    </div>
    <div class="card-body">
        <h5 class="card-title">ID {{ $category->id }}</h5>
        <p class="card-text">
            <span> This Category Is Active:  
                @if($category->is_active) {{  'Yes'  }}
                @else{{  'No'  }}
                @endif
            </span>
        </p>
    </div>
</div>
<br>
<h3>All Recipes From {{  $category->name  }} Category</h3>
<br>
@foreach($category->recipes as $recipe)
<div class="card">
    <div class="card-header">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <img class="img-fluid rounded" src="{{ asset($recipe->image) }}">
                </div>
                <div class="col">
                    <div class="card h-100" >
                        <div class="card-body">
                            <h1 class="card-title">{{$recipe->name}}</h1>
                            <h6 class="card-subtitle mb-2 text-muted">
                                {{ $recipe->category->name }}</h6>
                            <div>
                                <li class="list-group-item">Ingredients:
                                    <ul class="list-style-image">
                                    @if($recipe->ingredients)
                                    @foreach($recipe->ingredients as $ingredient)
                                        <li>{{ $ingredient->name }} </li>
                                    @endforeach
                                    @endif
                                    </ul>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card">
                        Description: {{$recipe->description}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endforeach
@endsection