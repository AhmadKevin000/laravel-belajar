<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'owner' => 'Kevin Smith'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'owner' => 'Kevin Smith'
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog',
        'artikel1' => 'https://fsd.unm.ac.id/wp-content/uploads/2020/06/Panduan-Artikel-TA-2020.pdf',
        'artikel2' => 'https://media.neliti.com/media/publications/217742-membangun-kebudayaan-dan-kepribadian-com.pdf'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'instagram' => 'https://www.instagram.com/arthur_morgan_asli/'
    ]);
});