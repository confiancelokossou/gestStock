<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
Route::get('/', function(){
    return view('auth.login');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/fournisseur', 'FournisseurController@index')->name('fournisseur');
Route::post('/addFournisseur', 'FournisseurController@addFournisseur');
Route::put('/editFournisseur/{id}', 'FournisseurController@editFournisseur');
Route::delete('/destroyFournisseur/{id}', 'FournisseurController@destroyFournisseur');
Route::get('/client', 'ClientController@index')->name('client');
Route::post('/addClient', 'ClientController@addClient');
Route::put('/editClient/{id}', 'ClientController@editClient');
Route::delete('/destroyClient/{id}', 'ClientController@destroyClient');
Route::get('/produit', 'ProduitController@index')->name('produit');
Route::post('/addProduit', 'ProduitController@addProduit');
Route::put('/editProduit/{id}', 'ProduitController@editProduit');
Route::delete('/destroyProduit/{id}', 'ProduitController@destroyProduit');
