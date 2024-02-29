<?php
use App\Controllers;
use App\Routes\Route;

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@home');

Route::get('/client', 'ClientController@index');
Route::get('/client/show', 'ClientController@show');
Route::get('/client/create', 'ClientController@create');
Route::post('/client/create', 'ClientController@store');
Route::get('/client/edit', 'ClientController@edit');
Route::post('/client/edit', 'ClientController@update');
Route::post('/client/delete', 'ClientController@delete');

Route::get('/registre/create', 'RegistreController@create');
Route::post('/registre/create', 'RegistreController@store');
Route::get('/registre', 'RegistreController@index');
Route::get('/registre/edit', 'RegistreController@edit');
Route::post('/registre/edit', 'RegistreController@update');
Route::get('/registre/show', 'RegistreController@show');
Route::post('/registre/delete', 'RegistreController@delete');

Route::get('/fournisseur/create', 'FournisseurController@create');
Route::post('/fournisseur/create', 'FournisseurController@store');
Route::get('/fournisseur', 'FournisseurController@index');
Route::get('/fournisseur/edit', 'FournisseurController@edit');
Route::post('/fournisseur/edit', 'FournisseurController@update');
Route::get('/fournisseur/show', 'FournisseurController@show');
Route::post('/fournisseur/delete', 'FournisseurController@delete');

Route::get('/voiture/create', 'VoitureController@create');
Route::post('/voiture/create', 'VoitureController@store');
Route::get('/voiture', 'VoitureController@index');
Route::get('/voiture/edit', 'VoitureController@edit');
Route::post('/voiture/edit', 'VoitureController@update');
Route::get('/voiture/show', 'VoitureController@show');
Route::post('/voiture/delete', 'VoitureController@delete');

Route::dispatch();
?>

