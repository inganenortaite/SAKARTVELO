@extends('components.layout')

@section('title', 'Ingredients')

@section('content')
    <h1>Ingredients</h1>

@include('components.alert.success_message')

<div class="row">
    <div class="col">
        <a target="_blank" href="{{ url('admin/ingredients/create') }}" class="btn btn-success">Create New Ingredient</a>
    </div>
</div>

<table class="table">
    <tr>
        <th class="text-center" scope="col" width="100">ID</th>
        <th scope="col">Ingredient Name</th>
        <th class="text-center" scope="col">Active</th>
        <th class="text-center" scope="col" width="100">Edit</th>
        <th class="text-center" scope="col" width="100">Delete</th>
    </tr>
@foreach($ingredients as $ingredient)
    <tr>
        <th class="text-center" scope="row">{{ $ingredient->id }}</th>
        <td>
            <a>{{ $ingredient->name }}</a>
        </td>
        <td class="text-center">
            {{ $ingredient->is_active }}
        </td>
        <td class="text-center">
            <a target="_blank" href="{{ route('admin.ingredients.edit', ['id' => $ingredient->id]) }}" class="btn btn-warning">Edit</a>
        </td>
        <td class="text-center">
            <form action="{{ route('admin.ingredients.delete', ['id' => $ingredient->id]) }}" method="post">
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
        {{ $ingredients->links()}}
    </div>
</div>
@endsection
