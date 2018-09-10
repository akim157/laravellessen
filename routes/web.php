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

//Route::get('/', ['as'=>'home',function () {
//    return view('welcome');
//}]);

//Route::get('/', function () {
//    return view('welcome');
//})->name('dom');

Route::get('/', 'Admin\IndexController@show')->name('home');

Route::get('/about','Admin\AboutController@show')->name('about');

Route::get('/articles', 'Admin\Core@getArticles')->name('articles');

Route::get('/article/{id}', 'Admin\Core@getArticle')->name('article');

//Route::match(['get', 'post'], '/contact/{id?}','Admin\ContactController@show')->name('contact');
Route::get('/contact', 'Admin\ContactController@show')->middleware('auth')->name('contact');
Route::post('/contact','Admin\ContactController@store');

//Route::get('pages/add','Admin\CoreResource@add');
//Route::resource('/pages','Admin\CoreResource');

Route::get('/form', function(){
    return view('form');
});

//Route::controller('/pages', 'PagesController',['getCreate' => 'pages.create']);

//Route::get('/article/{id}', ['as'=>'article',function ($id) {
//    echo $id;
//}]);
//
//Route::get('/page/{cat}/{id}', function($id){
//    print '<pre>';
//    print $id;
//    print '</pre>';
//    echo '<pre>';
//    print_r($_ENV);
//    print config('app.locale');
//    print Config::set('app.locale','ru');
//    print Config::get('app.locale');
//    print env('APP_ENV');
//    echo '</pre>';
//})->where(['id'=>'[0-9]+','cat'=>'[A-Za-z]+']);
//});

//Route::get('/comments', function(){
//    return view('form');
//});
//
//Route::post('/comments', function(){
//    print_r($_POST);
//});

//Route::match(['get','post'],'/comments', function(){
//    print_r($_POST);
//});

//Route::any('/comments', function(){
//    print_r($_POST);
//});

//Route::get('/page', function () {
//    return view('page');
//});

//Route::group(['prefix'=>'admin/{id}'],function(){
//    Route::get('page/create/{var}', function(){
//        $route = Route::current();
////        echo $route->getName();
////          echo $route->getParameter('var',13);
//          print_r($route->parameters());
////        return redirect()->route('article',array('id'=>25));
//    })->name('createpage');
//    Route::get('page/edit', function(){
//        echo route('dom');
//    });
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
