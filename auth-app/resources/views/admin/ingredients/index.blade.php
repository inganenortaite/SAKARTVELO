@extends('components.layout')

@section('title', 'Ingredients')

@section('content')
    <h1>Ingredients</h1>

    <!-- @include('components.alert.success_message') -->

    <div class="row">
        <div class="col">
            <a href="{{ url('admin/ingredients/create') }}" class="btn btn-primary">Create</a>
        </div>
    </div>

    <table class="table">
        <tr>
            <th scope="col" width="100">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Is Active</th>
            <th scope="col" width="100">Edit</th>
            <th scope="col" width="100">Delete</th>
        </tr>
        @foreach($ingredients as $ingredient)
            <tr>
                <th scope="row">{{ $ingredient->id }}</th>
                <td>
                    <a href="{{ url('admin/ingredients/index', ['id' => $ingredient->id]) }}">{{ $ingredient->name }}</a>
                </td>
                <td>
                    <a href="{{ url('admin/ingredients/index', ['id' => $ingredient->id]) }}">{{ $ingredient->is_active }}</a>
                </td>
                <td>
                    <a href="{{ route('admin.ingredients.edit', ['id' => $ingredient->id]) }}" class="btn btn-info">Edit</a>
                </td>
                <td>
                    <form action="{{ route('admin.ingredients.delete', ['id' => $ingredient->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
