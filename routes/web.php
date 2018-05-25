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

// Route::get('/', function () {
//   return redirect('home');
// });


Auth::routes();

Route::get('/admin', 'HomeController@index');
Route::get('/home', 'HomeController@home');
Route::get('/pedidos', ['uses'=> 'Admin\PedidoController@store'])->name('pedidos');
Route::get('/', 'HomeController@inicio');
// Route::get('/productos', 'HomeController@productos');
Route::get('/productos/{id}', ['uses'=> 'ProductosController@producto'])->name('producto');
// Route::get('productos/comprar/{id}', ['uses'=> 'HomeController@comprar'])->name('comprar');


Route::post('comprar/', ['as'=> 'admin.pedidos.store', 'uses' => 'Admin\PedidoController@prueba']);


Route::get('admin/empresas', ['as'=> 'admin.empresas.index', 'uses' => 'Admin\EmpresaController@index']);
Route::post('admin/empresas', ['as'=> 'admin.empresas.store', 'uses' => 'Admin\EmpresaController@store']);
Route::get('admin/empresas/create', ['as'=> 'admin.empresas.create', 'uses' => 'Admin\EmpresaController@create']);
Route::put('admin/empresas/{empresas}', ['as'=> 'admin.empresas.update', 'uses' => 'Admin\EmpresaController@update']);
Route::patch('admin/empresas/{empresas}', ['as'=> 'admin.empresas.update', 'uses' => 'Admin\EmpresaController@update']);
Route::delete('admin/empresas/{empresas}', ['as'=> 'admin.empresas.destroy', 'uses' => 'Admin\EmpresaController@destroy']);
Route::get('admin/empresas/{empresas}', ['as'=> 'admin.empresas.show', 'uses' => 'Admin\EmpresaController@show']);
Route::get('admin/empresas/{empresas}/edit', ['as'=> 'admin.empresas.edit', 'uses' => 'Admin\EmpresaController@edit']);


Route::get('admin/productos', ['as'=> 'admin.productos.index', 'uses' => 'Admin\ProductoController@index']);
Route::post('admin/productos', ['as'=> 'admin.productos.store', 'uses' => 'Admin\ProductoController@store']);
Route::get('admin/productos/create', ['as'=> 'admin.productos.create', 'uses' => 'Admin\ProductoController@create']);
Route::put('admin/productos/{productos}', ['as'=> 'admin.productos.update', 'uses' => 'Admin\ProductoController@update']);
Route::patch('admin/productos/{productos}', ['as'=> 'admin.productos.update', 'uses' => 'Admin\ProductoController@update']);
Route::delete('admin/productos/{productos}', ['as'=> 'admin.productos.destroy', 'uses' => 'Admin\ProductoController@destroy']);
Route::get('admin/productos/{productos}', ['as'=> 'admin.productos.show', 'uses' => 'Admin\ProductoController@show']);
Route::get('admin/productos/{productos}/edit', ['as'=> 'admin.productos.edit', 'uses' => 'Admin\ProductoController@edit']);


Route::get('admin/estados', ['as'=> 'admin.estados.index', 'uses' => 'Admin\EstadoController@index']);
Route::post('admin/estados', ['as'=> 'admin.estados.store', 'uses' => 'Admin\EstadoController@store']);
Route::get('admin/estados/create', ['as'=> 'admin.estados.create', 'uses' => 'Admin\EstadoController@create']);
Route::put('admin/estados/{estados}', ['as'=> 'admin.estados.update', 'uses' => 'Admin\EstadoController@update']);
Route::patch('admin/estados/{estados}', ['as'=> 'admin.estados.update', 'uses' => 'Admin\EstadoController@update']);
Route::delete('admin/estados/{estados}', ['as'=> 'admin.estados.destroy', 'uses' => 'Admin\EstadoController@destroy']);
Route::get('admin/estados/{estados}', ['as'=> 'admin.estados.show', 'uses' => 'Admin\EstadoController@show']);
Route::get('admin/estados/{estados}/edit', ['as'=> 'admin.estados.edit', 'uses' => 'Admin\EstadoController@edit']);


Route::get('admin/pedidos', ['as'=> 'admin.pedidos.index', 'uses' => 'Admin\PedidoController@index']);
Route::post('admin/pedidos', ['as'=> 'admin.pedidos.store', 'uses' => 'Admin\PedidoController@store']);
Route::get('admin/pedidos/create', ['as'=> 'admin.pedidos.create', 'uses' => 'Admin\PedidoController@create']);
Route::put('admin/pedidos/{pedidos}', ['as'=> 'admin.pedidos.update', 'uses' => 'Admin\PedidoController@update']);
Route::patch('admin/pedidos/{pedidos}', ['as'=> 'admin.pedidos.update', 'uses' => 'Admin\PedidoController@update']);
Route::delete('admin/pedidos/{pedidos}', ['as'=> 'admin.pedidos.destroy', 'uses' => 'Admin\PedidoController@destroy']);
Route::delete('pedidos/{pedidos2}', ['as'=> 'pedidos.destroy2', 'uses' => 'PedidosController@destroy2']);
Route::get('admin/pedidos/{pedidos}', ['as'=> 'admin.pedidos.show', 'uses' => 'Admin\PedidoController@show']);
Route::get('admin/pedidos/{pedidos}/edit', ['as'=> 'admin.pedidos.edit', 'uses' => 'Admin\PedidoController@edit']);
