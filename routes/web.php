<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\blog;
use App\Models\aboutus;
use App\Models\siswa;

Route::get('/', function () {
    return view('welcome' , ['title' => 'Home']);
});

Route::get('/blog' ,function(){
    // dump (request('search'));

    $cari_judul= blog::latest();

    if (request('search')){
        $cari_judul->where('title','like', '%'. request('search').'%');
    }

    return view('blog' , ['title' => 'Blog' , 'posts' => $cari_judul->paginate(6)]);
    // return view('blog' , ['title' => 'Blog' , 'posts' => $tampil_data->get()]);
});

    Route::get('/post/{blog:slug}' , function (blog $blog) {
        // $posts = blog::all();
        // $post = Arr::first($posts, function($post) use($slug){
        //     return $post['slug'] == $slug;
        // });
        return view('post',['title' => 'Post' , 'post' => $blog]);
    });


Route::get('/aboutme' ,function(){
    return view('about-us' , ['title' => 'Tentang Kami' , 'aboutme' =>aboutus::all()]);
});

Route::get('/post-about-us/{slug}' , function ($slug) {
    // $abouts = aboutus::kita(); 
    // $about = Arr::first($abouts, function($about) use($slug){
    //     return $about['slug'] == $slug;
    // });
    return view('post-about-us',['title' => 'Biodata Diri' , 'about' =>aboutus::where('slug',$slug)->first() ]);
});
Route::get('/kontak' ,function(){
    return view('kontak' , ['title' => 'Contact']);
});

Route::get('/siswa' ,function(){
    // dump (request('search'));

    $cari_nama= siswa::latest();

    if (request('search')){
        $cari_nama->where('nama','like', '%'. request('search').'%');
    }

    return view('Siswa' , ['title' => 'Siswa' , 'posts' => $cari_nama->paginate(5)]);
    // return view('blog' , ['title' => 'Blog' , 'posts' => $tampil_data->get()]);
});
