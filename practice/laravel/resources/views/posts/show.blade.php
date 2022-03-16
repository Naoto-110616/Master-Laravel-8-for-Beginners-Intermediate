@extends("layouts.app")

@section('title', $post['title'])

@section('content')
    @if ($post['is_new'])
        <div>A new blog post! Using if</div>
    @else
        <div>Blog post is old! Using elseif/else</div>
    @endif

    @unless($post['is_new'])
        <div>It is an old post ... Using unless</div>
    @endunless

    <h1>{{ $post['title'] }}</h1>
    <p>{{ $post['content'] }}</p>

    @isset($post['has_comments'])
        <div>The post has some comments ... Using isset</div>
    @endisset

@endsection
