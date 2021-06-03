<?php
use App\Http\Controllers\Blogs;
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
    return view('welcome');
});
Route::View('index','home');
Route::view('blog', 'userblog');
Route::post('submit', [App\Http\Controllers\Blogs::class, 'save']);

Route::get('index', [App\Http\Controllers\UserDiplays::class, 'list']);
Route::get('readmore/{id}',[App\Http\Controllers\UserDiplays::class, 'read']);
Route::get('index', [App\Http\Controllers\UserDiplays::class, 'list'])->name('index');