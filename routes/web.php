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

//IMPRIME TODAS LAS CONSULTAS QUE HACE EN LA BD
/*
DB::listen(function($query){

    var_dump($query->sql);
});*/


Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact','MessagesController@store')->name('contactp');

Route::resource('proyectos', 'ProjectController');

Route::get('categorias/{category}','CategoryController@show')->name('categories.show');
/*
Route::get("/proyectos","ProjectController@index")->name('project.index');
Route::get("/proyectos/crear","ProjectController@create")->name('project.create');
Route::get("/proyectos/{proyect}/editar","ProjectController@edit")->name('project.edit');
Route::get("/proyectos/{proyect}","ProjectController@show")->name('project.show');

Route::patch("/proyectos/{proyect}","ProjectController@update")->name('project.update');
Route::delete("/proyectos/{proyect}","ProjectController@destroy")->name('project.destroy');

Route::post("/proyectos/crear","ProjectController@store")->name('project.store');*/


Auth::routes(['register'=>false]);

