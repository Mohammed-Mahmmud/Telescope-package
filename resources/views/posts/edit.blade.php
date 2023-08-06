@extends('layouts.app')

@section('content')
<form action="{{ route('posts.update' , $post) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class ="row">
                <div class="col-6">
                <div class="form-group">
                    <label for="title">Enter Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" >
                </div>
            </div>
                <br>
                <div class="col-6">
                <div class="form-group">
                    <label for="content">Enter Content</label>
                    <input type="text" class="form-control" id="content" name="content" value="{{ $post->content }}">
                </div>
            </div>
                <br>
        </div>
        <br>
            <div class="row">
                <div class="col-6">
                <div class="form-group">
                    <label for="featured">Enter Features</label>
                    <input type="text" class="form-control" id="featured" name="featured" value="{{ $post->featured }}">
                </div>
            </div>
                <br>
                <div class="col-6">
                <div class="form-group">
                    <label for="category_id">Enter Category</label>
                    <input type="text" class="form-control" id="category_id" name="category_id" value="{{ $post->category_id }}">
                </div>
            </div>
            <br>
        </div>
                <button type="submit" class="btn btn-primary mt-5">Submit</button>

            </div>
        </div>
    </div>
</form>


@endsection
