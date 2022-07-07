<?php

use App\AppleFacade;
use App\Container;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Test;
use App\TestFacade;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which 
r|
*/

// Route::get('/', [HomeController::class, 'testroot'])->name('root');

Route::get('/', function() {

    // return TestFacade::execute();
    // dd(resolve('test'));
    dd(app('test')->execute());
});

Route::get( '/apple', function() {
    dd(AppleFacade::text());
}
);

Route::resource('posts', HomeController::class);


Route::get('logout', [AuthController::class, 'logout']);

