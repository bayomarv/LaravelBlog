@extends('layouts.app')

@section('content')
    <div class="col-md-8 mx-auto my-5">
        <h1 class="text-center mb-3">Create Post</h1>
        <form action="{{ route('posts.store') }}" method="POST" class="mb-4" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input name="title" class="form-control" placeholder="" required value="{{ old('title') }}">
                </div>

                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea id="body" name="body" class="form-control ckeditor" required placeholder="" value="{{ old('body') }}">
                    </textarea>
                </div>
            </div>

            <label for="cover_image">Upload Image</label><br>
            <input type="file" id="cover_image" name="cover_image">

            <div class="mt-4">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Post</button>
            </div>
        </form>
    </div>
@endsection