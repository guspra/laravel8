<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "judul" => "home"
    ]);
});

Route::get('/about', function () {
    $identitas = [
        "name" => "guspra",
        "email" => "guspraa@gmail.com",
        "photo1" => "bird.png",
        "photo2" => "bird2.png",
        "judul" => "about"
    ];
    return view('about', $identitas);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "judulpost" => "POST 1",
            "slug" => "slug-post-1",
            "isipost" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum debitis impedit aperiam atque, unde iure nulla quo omnis sequi? Fuga, dolore eum? Officiis minima, quisquam expedita ad quis incidunt maiores?"
        ],
        [
            "judulpost" => "POST 2",
            "slug" => "slug-post-2",
            "isipost" => "Xxxx aaaa bbb ccc ddd, adipisicing elit. Eum debitis impedit aperiam atque, unde iure nulla quo omnis sequi? Fuga, dolore eum? Officiis minima, quisquam expedita ad quis incidunt maiores?"
        ]
    ];
    return view('posts', [
        "judul" => "blog",
        "blog_posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "judulpost" => "POST 1",
            "slug" => "slug-post-1",
            "isipost" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum debitis impedit aperiam atque, unde iure nulla quo omnis sequi? Fuga, dolore eum? Officiis minima, quisquam expedita ad quis incidunt maiores?"
        ],
        [
            "judulpost" => "POST 2",
            "slug" => "slug-post-2",
            "isipost" => "Xxxx aaaa bbb ccc ddd, adipisicing elit. Eum debitis impedit aperiam atque, unde iure nulla quo omnis sequi? Fuga, dolore eum? Officiis minima, quisquam expedita ad quis incidunt maiores?"
        ]
    ];

    $temp_post = [];
    foreach($blog_posts as $post){
        if($post['slug'] === $slug){
            $temp_post = $post;
        }
    }

    return view('partials.post', [
        "judul" => "",
        "berita" => $temp_post
    ]);
});
