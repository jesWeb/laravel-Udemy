<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\web\BlogController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//ruta protegida con middleware usolo pasamos la parte de las rutas creadas
Route::group(['prefix' => 'dashboard', 'middleware'  => ['auth', 'admin']], function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name("dashboard");

    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
});


Route::group(['prefix'=> 'blog'],function(){
    Route::controller(BlogController::class)->group(function () {
        Route::get('/',"index")->name("web.blog.index");
        Route::get('/{id}',"show")->name("web.blog.show");
    });
});


Route::resource('pruebadash', PostController::class   );

require __DIR__ . '/auth.php';
