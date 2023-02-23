@extends('components.layout')
 
@section('content')
<div class="row">
    @foreach($recipes as $recipe)
    <div class="col-3 mb-3">
        <div class="card">
            <div class="card-body">
                @if ($recipe->image)
                    <img class="card-img-top"  src="{{ asset($recipe->image) }}">
                @else
                    No image
                @endif
                <h5 class="card-title"><a href="{{ url('recipe', ['id' => $recipe->id]) }}" class="list-group-item list-group-item-action">{{ $recipe->name }}</a></h5>
                <h6 class="card-subtitle text-muted">
                    @if($recipe->category)
                        {{ $recipe->category->name }}
                    @endif
                </h6>
                <a href="{{ url('recipe', ['id'=> $recipe->id]) }}">Link</a>  
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection