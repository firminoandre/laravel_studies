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
$array = [1, 2, 3, 4, 5];
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    $array = [1, 2, 3, 4, 5];
    return view('contato', [
        'array' => $array,
    ]);
});

//passando parametro opcional com o ?
Route::get('/contatos/{id?}', function ($id = null) {
    return view('contatos', ['id' => $id]);
});

//passando parametro string 
Route::get('/contato', function () {
    //vendo se tem algum request com o nome search
    $busca = request('search');

    return view('contato', ['busca' => $busca]);
});
