@extends('layouts.app')

@section('content')
	<div class="justify-content-center py-5" style="background:white;">
	    <div class="container col-md-8 mx-auto">
		    <a href="/posts" class="btn btn-secondary mb-5">Go Back</a>
		    <h1>{{$post->title}}</h1>
		    <p class="text-muted">Written {{ $post->created_at->diffForHumans() }} by <span class="text-dark text-uppercase">{{$post->user->name}}</span></p>
		    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
		    <br><br>
		    <div>
		        {!!$post->body!!}
		    </div>
		</div>
	</div>
	<hr style="margin:0">
@endsection