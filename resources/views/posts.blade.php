@extends('layouts.main')

@section('bagianbody')
    <h1>HALAMAN POSTS</h1>

    @foreach ($blog_posts as $post)
        <h3>
            <a href="/posts/{{ $post['slug'] }}">{{ $post['judulpost'] }}</a>
            
        </h3>
        <p>
            {{ $post['isipost'] }}
        </p>
    @endforeach
@endsection
