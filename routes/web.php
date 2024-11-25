<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

//Route::inertia('/','Index');
Route::get('/', function () {
    return inertia('Index');
});

Route::inertia('/about', 'About');

Route::resource('articles', ArticleController::class);

?>
