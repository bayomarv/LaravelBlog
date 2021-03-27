@extends('layouts.app')

@section('content')
	<div class="col-md-8 mx-auto">
		<h3 class="pt-5">BLOG</h3>
	</div>
	@if(count($posts) > 0)
        @foreach($posts as $post)
		<div class="py-5">
			
			<div class="col-md-8  mx-auto">
				<div class="row">
					<div class="col-md-6">
						<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
					</div>
					<div class="col-md-6">
						<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
						<p class="text-muted">Written {{ $post->created_at->diffForHumans() }} by <span class="text-dark text-uppercase">{{$post->user->name}}</span></p>
					
					</div>
				</div>
			</div>
		</div>
	@endforeach
	<div class="container col-md-8">
		{{$posts->links()}}
	</div>

	@endif
	
@endsection