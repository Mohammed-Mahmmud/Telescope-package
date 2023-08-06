<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\HomeController;
 use App\Http\Controllers\PostsController;
 use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/posts', PostsController::class);

Route::get( '/job', function() {
    $batch = Bus:: batch([
        new newJob(),
])->dispatch();
});

Route::get('/cache', function () {
    if(Cache::has('key')) {
        return  Cache::get( 'key' ) ;
    }
    Cache::add( 'key','new_value');
        return Cache::get ('key');
        });

Route::get('/dumps', function () {
   return dump('welcome from dump');
});

Route::get( '/event', function () {
    NewEvent::dispatch();
});

    Route::get( '/exception', function () {
    throw new Exception("this is an exception ");
});

Route::get( '/ logs', function () {
//    Log::info("hello from the logs info level");
    Log::error("hello from the logs level");

});
