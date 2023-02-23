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
        <a href="{{ url('admin/categories/create') }}" class="btn btn-primary">Create</a>
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
            <a href="{{ url('admin/categories/index', ['id' => $category->id]) }}">{{ $category->name }}</a>
        </td>
        <td>
            <a href="{{ url('admin/categories/index', ['id' => $category->id]) }}">{{ $category->is_active }}</a>
        </td>
        <td>
            <a href="{{ route('admin.categories.edit', ['id' => $category->id]) }}" class="btn btn-info">Edit</a>
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