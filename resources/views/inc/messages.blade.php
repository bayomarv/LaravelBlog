@extends('layouts.app')

@section('content')
<div class="row justify-content-center py-5">
    <div class="col-md-8">
        <p>{{ __('You are logged in!') }}</p>
        <div class="card">
            <div class="card-header"><h3>Hello! {{ Auth::user()->name  }}</h3></div>
            <div class="mx-3 my-3">
                <a href="/posts/create" class="btn btn-primary">Create Post</a>
            </div>
            <div class="card-body" style="padding:0">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                
                @if(count($posts) > 0)
                    <h3 class="mx-3">Your Blog Posts</h3>
                    <table class="table table-striped" style="margin:0">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="{{ route('posts.update', $post) }}" class="btn btn-secondary">Edit</a></td>
                                <td>
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="mb-4">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <p class="mx-3">You have no posts</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
