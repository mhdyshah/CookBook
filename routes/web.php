<?php

use App\Http\Livewire\About;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Profile;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Index\AuthorRecipes;
use App\Http\Livewire\Index\Index;
use App\Http\Livewire\Recipe\CRecipe;
use App\Http\Livewire\Recipe\Recipe;
use App\Http\Livewire\Recipe\RudRecipe;
use App\Http\Livewire\Search\Search;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', Index::class);
Route::get('/about', About::class)->name('about');
Route::get('/sign-up', Register::class)->name('register')->middleware('guest');
Route::get('/sign-in', Login::class)->name('login')->middleware('guest');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
Route::get('/profile', Profile::class)->middleware('auth');

Route::get('/recipe/{id}', Recipe::class)->name('recipe');
Route::get('/creat-recipe', CRecipe::class)->middleware('auth');
Route::get('/recipe-detail', RudRecipe::class)->middleware('auth');
Route::get('/auth-recipe/{id}', AuthorRecipes::class)->middleware('auth');
Route::get('/search/{catId}/{char?}', Search::class);
