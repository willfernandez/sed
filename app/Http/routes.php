<?php



Route::get('inicio', [
    'as'    =>  'auth.inicio',
    'uses'  =>  'Auth\AuthController@getLogin'
]);
Route::post('inicio', [
    'as'    =>  'auth.login',
    'uses'  =>  'Auth\AuthController@postLogin'
]);
Route::get('salir',[
    'as'    =>  'salir',
    'uses'  =>  'Auth\AuthController@getLogout'
]);




Route::group(['middleware' => 'auth'], function () {
    //dd('hola');
    Route::get('home', [
        'as'    => 'home',
        'uses'  =>  'HomeController@index'
    ]);
    Route::get('welcome', [
        'as'    => 'welcome',
        'uses'  =>  'HomeController@welcome'
    ]);

});


