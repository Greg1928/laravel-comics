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
    $links = [
        [
            'text' => "characters",
            'url' => "/characters",
            'current' => false,
        ],
        [
            'text' => "comics",
            'url' => "/comics",
            'current' => false,
        ],
        [
            'text' => "movies",
            'url' => "/movies",
            'current' => false,
        ],
        [
            'text' => "tv",
            'url' => "/tv",
            'current' => false,
        ],
        [
            'text' => "games",
            'url' => "/games",
            'current' => false,
        ],
        [
            'text' => "collectibles",
            'url' => "/collectibles",
            'current' => false,
        ],
        [
            'text' => "videos",
            'url' => "/videos",
            'current' => false,
        ],
        [
            'text' => "fans",
            'url' => "/fans",
            'current' => false,
        ],
        [
            'text' => "news",
            'url' => "/news",
            'current' => false,
        ],
        [
            'text' => "shops",
            'url' => "/shops",
            'current' => false,
        ],
    ];
    return view('home', compact('links'));
});
