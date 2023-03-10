@section('title', 'Recipe')

@extends('components.min_layout')

@section('content')
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
                        <a href="{{ url('admin/categories', ['id' => $recipe->category_id]) }}"></a>
                    </h6>
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
@endsection