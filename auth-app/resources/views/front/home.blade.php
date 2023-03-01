@extends('components.min_layout')
 
@section('content')

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">   
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="img-fluid" alt="100%x280" src="/images/1_Logo.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Sakartvelo Food Company</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="img-fluid" alt="100%x280" src="/images/Food.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="img-fluid" alt="100%x280" src="/images/1_Logo.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<h1>The Newest Recipes</h1>

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
                <h5 class="card-title"><a href="{{ url('recipe', ['id' => $recipe->id]) }}" class="list-group-item list-group-item-action">{{ $recipe->name }}</a></h5>
                <h6 class="card-subtitle text-muted">
                    @if($recipe->category)
                        {{ $recipe->category->name }}
                    @endif
                </h6>
                <a class="link-success" href="{{ url('recipe', ['id'=> $recipe->id]) }}">Make {{ $recipe->name }} Recipe</a>  
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection