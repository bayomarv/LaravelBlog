@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="container hero-text">
            <h1 class="mb-5">Welcome to my online forum!</h1>
            
            <a class="btn btn-primary btn-lg" href="{{ route('dashboard') }}" style="font-size: 20px;font-weigh:400">Create Post</a>
        </div>
    </section>
    <section>
    	<div class="col-md-8 mx-auto">
            <h3 class="pt-5">LATEST BLOG POSTS</h3>
        
        @if(count($posts) > 0)
            @foreach($posts as $post)
            <div class="py-5">
                
                <div class="">
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
        <a class="btn btn-success mb-5" href="{{ route('posts') }}">See more</a>
        @endif
        </div>
    </section>
    
@endsection
