
@extends('layouts.main')

@section('container')

    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog">

                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                {{-- <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                  </div> --}}
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3 text-center">
            {{-- @if ($posts[0]->image)
            <div style="max-height:350px; oveflow:hidden;">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid" alt="{{ $posts[0]->category->name }}">
            </div>
            @else --}}
            <img src="https://source.unsplash.com/1200x400" class="card-img-top" alt="{{ $posts[0]->name }}">
            {{-- @endif --}}
            <div class="card-body">
            <h3 class="card-title">
                <a href="/article/{{ $posts[0]->id }}" class="text-decoration-none text-dark">
                    {{ $posts[0]->title }}
                </a>
            </h3>
            <p>
                <small class="text-body-secondary">
                By. <a href="/blog?author={{ $posts[0]->author->name }}" class="text-decoration-none"> {{ $posts[0]->author->name  }} </a> 
             
               {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            {{-- <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a> --}}
            </div>
        </div>
  
        <div class="container">
            <div class="row">

                @foreach ($posts->skip(1) as $post)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                {{-- <div class="position-absolute p-2 text-white" style="background-color: rgba(0,0, 0, 0.5)">
                                    <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none text-white">
                                        {{ $post->category->name }}
                                    </a>
                                </div> --}}

                                {{-- @if ($post->image)
                                    <div style="max-height:350px; oveflow:hidden;">
                                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                                    </div>
                                @else --}}
                                    <img src="https://source.unsplash.com/500x400?" class="img-fluid" >
                                {{-- @endif --}}

                                <div class="card-body">
                                    <h5 class="card-title">{{  $post->title  }}</h5>
                                    <p class="card-text">{!! $post->body !!}</p>
                                    <p>By. <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name  }}</a> {{ $post->created_at->diffForHumans() }}</p>
                                    <a href="/article/{{ $post->id }}" class="btn btn-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                @endforeach

            </div>
        </div>
            
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
    
    <div class="d-flex justify-content-center">
        {{-- {{ $posts->links() }} --}}
    </div>
@endsection

