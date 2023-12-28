@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            
            <a href="/dashboard/posts" class="btn btn-success"> <i class="bi bi-arrow-left"  style="font-size: 15px"></i> Back to my all posts</a>    
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"> <i class="bi bi-pencil-fill"  style="font-size: 15px"></i> Edit</a>    
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"> 
                  <i class="bi bi-trash-fill"  style="font-size: 15px"></i>
                  Delete
                </button>
            </form>
            
            @if ($post->image)
            <div style="max-height:350px; oveflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
            @endif

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            
        </div>
    </div>
</div>
@endsection