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


Route::get('/', 'WelcomeController@index');

Route::resource('articles', 'ArticlesController');


/*
Route::get('auth/login', function(){
    $credentials=[
        'email'=>'john@email.com',
        'password'=>'password',
    ];

    if(! auth()->attempt($credentials)){
        return '로그인 정보가 정확하지 않습니다.';
    }//end if

    return redirect('protected');
});//end route

Route::get('protected', ['middleware'=>'auth', function(){
    dump(session()->all());

    if(! auth()->check()){
        return '누구세요?';
    }//end if

    return '어서오세요'.auth()->user()->name;
}]);//end route

Route::get('auth/logout', function(){
    auth()->logout();

    return '또 봐요 ~ ';
});
*/

/*
Route::pattern('a', '[a-z]+');
Route::get('/{a}/{b}', function ($fo,$a) {
    return $fo;
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
DB::listen(function($query){
    dump($query->sql);
});
*/
