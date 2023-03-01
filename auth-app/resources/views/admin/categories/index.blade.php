@extends('components.layout')

@section('title', 'Categories')

@section('content')
    <h1>Categories</h1>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
    
<div class="row">
    <div class="col">
        <a target="_blank" href="{{ url('admin/categories/create') }}" class="btn btn-success">Create New Category</a>
    </div>
</div>

<table class="table">
    <tr>
        <th scope="col" width="100">ID</th>
        <th scope="col">Category Name</th>
        <th scope="col">Active</th>
        <th scope="col" width="100">Edit</th>
        <th scope="col" width="100">Delete</th>
    </tr>
@foreach($categories as $category)
    <tr>
        <th scope="row">{{ $category->id }}</th>
        <td>
            <a href="{{ url('admin/categories', ['id' => $category->id]) }}">{{ $category->name }}</a>
        </td>
        <td>
            {{ $category->is_active }}
        </td>
        <td>
            <a target="_blank" href="{{ route('admin.categories.edit', ['id' => $category->id]) }}" class="btn btn-warning">Edit</a>
        </td>
        <td>
            <form action="{{ route('admin.categories.delete', ['id' => $category->id]) }}" method="post">
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
        {{ $categories->links()}}
    </div>
</div>
@endsection