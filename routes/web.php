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

use App\Http\Controllers\StaticController;
use App\Http\Controllers\PhonesControllers;

Route::get('/', [StaticController::class , 'index'])->name('home.index');
Route::get('/about',[StaticController::class , 'about'])->name('home.about');
Route::get('/contact',[StaticController::class , 'contact'])->name('home.contact');
Route::resource('phones', PhonesControllers::class);



/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/store/{category?}/{items?}', function ($category=null,$items=null) {
       if (isset($category)){
             if(isset($items)){
                return $items;
                return $category;
             }
       }
       return "stroe";
});


/*
Route::get('/store', function () {
    $filters = request('style');
    if (isset($filters)){
        return "we are champions $filters";
    }else
    return "we are champions $filters";
});*/
