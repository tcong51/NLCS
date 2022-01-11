<?php
use Illuminate\Support\Facades\Route;
use SebastianBergmann\Environment\Console;
Route::get('/','App\Http\Controllers\MainController@index');
Route::get('detail',function(){
    return view('pages.detail.detail');
});
Route::get('list_tree', function () {
    return view('pages.list_tree.list_tree');
});
Route::get('search', function () {
    return view('pages.search.search');
});
Route::get('result_search','App\Http\Controllers\MainController@search');
Auth::routes();
Route::get('admin', 'App\Http\Controllers\HomeController@index');
Route::get('addtree', 'App\Http\Controllers\HomeController@addtree');
Route::post('formTree', 'App\Http\Controllers\formTree@formTree');
Route::get('listtree', 'App\Http\Controllers\HomeController@listtree');
Route::get('listT', 'App\Http\Controllers\HomeController@listT');
Route::get('menuedit', 'App\Http\Controllers\HomeController@menuedit');
Route::get('edit', 'App\Http\Controllers\HomeController@edit');
Route::get('editTree', 'App\Http\Controllers\ediTtree@editTree');
Route::get('deleteTree', 'App\Http\Controllers\deleteTree@deleteTree');
