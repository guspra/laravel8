@extends('layouts.main')

@section('bagianbody')
    <article>
        <h2>{{ $berita['judulpost'] }}</h2>
        <h5>by: penulis</h5>
        <p>{{ $berita['isipost'] }}</p>
    </article>
    <a href="/blog">back to blog</a>
@endsection
