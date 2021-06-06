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



Auth::routes();


//--------------------------------------- Frontend Routes --------------------------//

Route::get('/', 'FrontendController@index')->name('Home');

Route::get('login/{provider}', 'SocialAuth\SocialLoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'SocialAuth\SocialLoginController@handleProviderCallback');


Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admin'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
});
