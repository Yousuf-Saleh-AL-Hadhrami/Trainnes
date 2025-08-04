<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;


use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Config;


Route::get('/', function(){

    return view('home');

})->name('home');



Route::resource('/users', UserController::class )->names([
    // 'posts.index' => 'xyz'
]);

Route::resource('/posts', PostController::class )->names([
    // 'posts.index' => 'xyz'
]);



// Route::fallback(function(){

//      return view('welcome');
// });
// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/users', function(){

//     // return config('app.name');

//     // Config::set('app.name', 'LARAVEL');
//     return Config::get('app.name');


// });

// Route::get('/categories', CategoryController::class);

// Route::get('/', function(){

// });

// $router = app(Router::class);

// $router->get('admin', function(){
//   return 'Admin';
// });


// class Car {

//     public $color; // non-static property

//     public static $counter = 0; // static property

//     public static $model;

//     public function setColor($color){ // non-static method
//         $this->color = $color; 
//     }

//     public static function setModel($model)
//     {
//          self::$model = $model;

//          return new self;
//     } 
// }
