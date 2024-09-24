<?php

use App\Http\Controllers\Dashboard\PostController;
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

Route::get('/', function (){
    return view('welcome');
});

//r******uta de ejecisio******
Route::get('/test', function () {
 return view('test');
});

Route::get('/practica', function (){
    return view('/test');
});


// Route::get('/crud', function () {
// return view('crud/index');
// });

//******pasando parametros en las vistas****



// Route::get('/crud', function () {

//     $age = 25;
//     $data = ['name' => 'jesus', 'age' => $age];

// return view('crud/index',$data);
// });

//**RUTA CON nombre  */

Route::get('/crud', function () {

    $age = 25;
    $data = ['name' => 'jesus', 'age' => $age];

return view('crud/index',$data);
})->name('crudcito');

/**Rutas de tarea */
Route::get('/contact', function () {
    $name = ['name'=> 'Ferrari'];
    //formas de redirraccionar
    // return redirect('/carro',303);
    // return redirect()->route('carro');
    return to_route('carro');

})->name('contact');

Route::get('/carro', function () {
    return view('contact/carro');
})->name('carro');



//ruta forma trtadicional pero funcional
Route::resource('post', PostController::class);


