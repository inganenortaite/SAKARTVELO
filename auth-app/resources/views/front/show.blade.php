@section('title', 'Recipe')

@extends('components.min_layout')

@section('content')
<div>
    <h1>{{$recipe->name}}</h1>
</div>
<div>
    <img class="card-img-top" src="{{ asset($recipe->image) }}">
    <!-- <img class="card-img-top" style="max-height: 150px;" src="{{ asset($recipe->image) }}"> -->
</div>
<div>
    Category: {{$recipe->category->name}}
</div>
<div>
    <li class="list-group-item">Ingredients:
      <ol class="list-group list-group-numbered">
      @if($recipe->ingredients)
      @foreach($recipe->ingredients as $ingredient)
        {{ $ingredient->name }} 
      @endforeach
      @endif
      </ol>
    </li>
</div>
<div>
    Description: {{$recipe->description}}
</div>

@endsection