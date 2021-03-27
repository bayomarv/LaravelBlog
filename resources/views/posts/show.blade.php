@extends('layouts.app')

@section('content')
<div class="row justify-content-center py-5" style="background:white;">
    <div class="col-md-8">
	    <a href="/posts" class="btn btn-secondary mb-5">Go Back</a>
	    <h1>{{$post->title}}</h1>
	    <p class="text-muted">Written {{ $post->created_at->diffForHumans() }} by <span class="text-dark text-uppercase">{{$post->user->name}}</span></p>
	    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
	    <br><br>
	    <div>
	        {!!$post->body!!}
	    </div> 
	    
	    <!--
	    @if(!Auth::guest())
	        @if(Auth::user()->id == $post->user_id)
	            <a href="{{ route('posts.update', $post) }}" class="btn btn-secondary">Edit</a>

	            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="mb-4">
	                @csrf
	                @method('DELETE')
	                <input type="submit" class="btn btn-danger" value>Delete</button>
	            </form>
	        @endif
	    @endif
		-->

	</div>
</div>
@endsection