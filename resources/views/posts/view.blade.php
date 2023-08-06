@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <a href="{{ route('posts.create') }}" class="btn btn-success btn-block">add new post</a>
    </div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">title</th>
        <th scope="col">content</th>
        <th scope="col">category</th>
        <th scope="col">featured</th>
        <th scope="col">Operations</th>


      </tr>
    </thead>
    <tbody>

        @foreach($data as $item)
        <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->content }}</td>
        <td>{{ $item->category_id }}</td>
        <td>{{ $item->featured }}</td>
        <td>
            <div class="raw">
                <div class="col-lg-4">
            <a type="button" href="{{ route('posts.index') }}" class="btn btn-info">show</a>
                </div>
                <br>
                <div class="col-lg-4">
                <a type="button" href="{{ route('posts.edit',$item->id) }}" class="btn btn-warning">Edit</a>

            </div>
                <br>
            <div class="col-lg-4">
                <form action="{{ route('posts.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </div>

        </div>
        </td>
    </tr>
</tbody>
@endforeach
</table>
</div>
    @endsection
