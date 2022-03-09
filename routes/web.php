<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\EventsController;
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
Route::get('/todos', function () {
    return view('todos');
});
Route::get('/calendar', function () {
    return view('calendar');
});
Route::get('/board', function () {
    return view('board');
});
Route::get('/events-feed', function () {
    return view('events-feed');    
});
Route::fallback(function (){
    return view('fallback');
});
Route::get('/db-test', function (){
    try {
        echo \DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        echo 'None';
    }
});
Route::get('/db-migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});
Route::resource('/todos', TodoController::class);

Route::resource('/events', EventsController::class);

$events = Event::select('title', 'start_at AS start', 'end_at AS end')->get();
