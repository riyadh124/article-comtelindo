
@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>By. <a href="/blog?author={{ $post->author->name }}" class="text-decoration-none"> {{ $post->author->name  }}</a> in <a href="/blog?category=" class="text-decoration-none"></a></p>
        
            <img src="https://source.unsplash.com/1200x400?" class="img-fluid mt-3" alt="">
            
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            
            <p class="mt-3"><a href="/article" class="text-decoration-none">Back to blog</a></p>        
        </div>
    </div>
</div>
@endsection


