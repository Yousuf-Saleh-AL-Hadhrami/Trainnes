<?php

<<<<<<< HEAD
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('users', UserController::class)->middleware('auth');

require __DIR__.'/auth.php';
=======
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
>>>>>>> a08e8aa6b2fd5cad4aebd753b6c8da312818dde8
