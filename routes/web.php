<?php

use App\Http\Controllers\AlunosController;
use App\Http\Controllers\ProfessoresController;
use App\Http\Controllers\MateriasController;
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
Route::resource('alunos', AlunosController::class);

Route::resource('professores', ProfessoresController::class,['parameters' =>[
    'professores' => 'professor'
]]);

Route::resource('materias', MateriasController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('sobre', function () {
    return view('sobre');
});
