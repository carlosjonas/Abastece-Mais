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

use App\Http\Controllers\SupplyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;


/*ROTAS RESPOSÁVEIS PELO ABASTECIMENTO*/

//Rota que manda para welcome com os abastecimentos
Route::get('/',[SupplyController::class, 'index']);
//Rota que manda para o create 
Route::get('/suplly/create/{id_user}',[SupplyController::class, 'create'])->middleware('auth');
//Rota post que vai colocar os dados na tabela
Route::post('/supllys', [SupplyController::class, 'store']);
//Rota em que passo o id de carro para o formulário 
Route::get('/car/{id_user}', [CarController::class, 'getCarByUserId']);

/*ROTAS RESPOSÁVEIS PELO USUÁRIO*/

//Rotas de login e registro de usuário
Route::get('/contact',function(){
    return view('contact');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');


/*ROTAS RESPOSÁVEIS PELO CARRO*/
Route::get('/car/main',[CarController::class, 'car']);
//Route::get('/car/main',[SupplyController::class, 'index_car']);
//Route::get('/car/create',[AbastecimentoController::class, 'create_car']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
