<?php

use App\Http\Controllers\NotaController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

 /////////////////////////////////////////////////////////////
 ///////Alumnos///////
 Route::get('/alumnos' , 'AlumnoController@index');

 Route::get('/alumnos/nuevo', 'AlumnoController@create');
 
 Route::get('/alumnos/{id}', 'AlumnoController@show');
 
 Route::post('alumnos/crear', 'AlumnoController@store');
 
 Route::get('alumnos/{alumno}/editar', 'AlumnoController@editar');
 
 Route::put('alumnos/{alumnos}', 'AlumnoController@actualizar');
 
 Route::delete('/alumnos/{id}/eliminar', 'AlumnoController@delete');
///////////////////////////////////////////////////////////////////////////////////////////
///Profesor///////////////////
Route::get('/profesor' , 'ProfesorController@index');

Route::get('/profesor/nuevos', 'ProfesorController@create');

Route::get('/profesor/{id}', 'ProfesorController@show');

Route::post('profesor/crear', 'ProfesorController@store');

Route::get('profesor/{profesor}/editar', 'ProfesorController@editar');

Route::put('profesor/{profesor}', 'ProfesorController@update');

Route::delete('/profesor/{id}/eliminar', 'ProfesorController@delete');
/////////////////////////////////////////////////////////////////////////////////////////////////

///////////CURSOS///////////////////////////////////////////////////////////////////////////////////////
Route::get('/cursos' , 'CursosController@index');

Route::get('/cursos/nuevo', 'CursosController@create');

Route::get('/cursos/{id}', 'CursosController@show');

Route::post('cursos/crear', 'CursosController@store');

Route::get('cursos/{cursos}/editar', 'CursosController@editar');

Route::get('cursos/actualizar/{id}', 'CursosController@actualizar');

Route::delete('/cursos/{id}/eliminar', 'CursosController@delete');




Route::resource('nota', 'NotaController');

Route::group(['middleware' => ['permission:create_alumnos|edit_alumnos|delete_alumnos|view_alumnos']], function () {
    Route::resource('alumnos', 'AlumnoController');
});

Route::group(['middleware' => ['permission:create_roles|edit_roles|delete_roles|view_roles']], function () {
    Route::resource('roles', 'RoleController');
});

Route::group(['middleware' => ['permission:create_profesor|edit_profesor|delete_profesor|view_profesor']], function () {
    Route::resource('profesor', 'profesorController');
});

Route::group(['middleware' => ['permission:create_nota|edit_nota|delete_nota|view_nota']], function () {
    Route::resource('nota', 'NotaController');
});

Route::group(['middleware' => ['permission:create_cursos|edit_cursos|delete_cursos|view_cursos']], function () {
    Route::resource('cursos', 'CursosController');
});

Route::group(['middleware' => ['permission:create_users|edit_users|delete_users|view_users']], function () {
    Route::resource('users', 'UserController');
});
Route::get('/roles/{role}/delete_roles ', 'UserController@delete_roles')->name('users.delete_roles');
