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
/*  ================    Backend    ====================     */
// Admin
Route::get('admin','Auth\AdminLoginController@loginshow');
Route::post('admin.login','Auth\AdminLoginController@login');
Route::get('dashboard','Admin\AdminController@dashboard');



// Blog
Route::get('blog/create','Admin\BlogController@create');
Route::get('blog/view','Admin\BlogController@view');
Route::post('blog/edit/{id}','Admin\BlogController@edit');
Route::post('blog/update/{id}','Admin\BlogController@update');

/*  ================    Backend    ====================     */





/*  ================    Frontend    ====================     */


Route::prefix('')->group(function () {
    Route::resource('services','Frontend\ServiceController');

    Route::get('/', function () {
        return view('front.index');
    });

    Route::get('/about', function () {
        return view('front.about');
    });
    Route::resource('/contact', 'Frontend\ContactController');
    Route::resource('/message', 'Frontend\MessageController');


    Route::get('/blog', function () {
        return view('front.blog
    ');
    });

});


//Front end route list
Route::prefix('/')->group(function (){
    Route::get('blog','FrontBlogController@index')->name('blog');
    Route::get('blogdetails/{id}','FrontBlogController@show')->name('blogdetails');

});







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {

    //Blog add, update delete
    Route::get('/blog', ['uses' => 'Admin\BlogController@index', 'as' => 'blogindex', 'roles' => ['superadmin']]);
    Route::get('/writeblog', ['uses' => 'Admin\BlogController@create', 'as' => 'createblog', 'roles' => ['superadmin']]);
    Route::get('showBlog/{id}', ['uses'=>'Admin\BlogController@show','as'=>'showBlog','roles'=>['superadmin']]);
    Route::get('editBlog/{id}', ['uses'=>'Admin\BlogController@edit','as'=>'editBlog','roles'=>['superadmin']]);
    Route::get('destroyBlog/{id}', ['uses'=>'Admin\BlogController@destroy','as'=>'destroyBlog','roles'=>['superadmin']]);
    Route::post('blogPost', 'Admin\BlogController@store')->name('blogPost');
    Route::patch('update/{id}',['uses'=>'Admin\BlogController@update','as'=>'updateblog','roles'=>['superadmin']]);


    //Blog category add,edit

    Route::get('/blogcategory', ['uses'=>'Admin\BlogCategoryController@index','as'=>'blogcategoryindex','roles'=>['superadmin']]);
    Route::post('/categorystore', ['uses'=>'Admin\BlogCategoryController@store','as'=>'categorystore','roles'=>['superadmin']]);
    Route::get('/writeblogcategory', ['uses'=>'Admin\BlogCategoryController@create','as'=>'createblogcategory','roles'=>['superadmin']]);
    Route::get('editBlogCategory/{id}', ['uses'=>'Admin\BlogCategoryController@edit','as'=>'editBlogCategory','roles'=>['superadmin']]);
    Route::patch('updateBlogCategory/{id}',['uses'=>'Admin\BlogCategoryController@update','as'=>'updateBlogCategory','roles'=>['superadmin']]);
    Route::get('destroyBlogCategory/{id}', ['uses'=>'Admin\BlogCategoryController@destroy','as'=>'destroyBlogCategory','roles'=>['superadmin']]);





   //Services add,edit,delete
    Route::get('/service', ['uses'=>'Admin\ServiceController@index','as'=>'servicesindex','roles'=>['superadmin']]);
    Route::post('/servicesstore', ['uses'=>'Admin\ServiceController@store','as'=>'servicesstore','roles'=>['superadmin']]);
    Route::get('/writeservices', ['uses'=>'Admin\ServiceController@create','as'=>'createservices','roles'=>['superadmin']]);
    Route::get('showService/{id}', ['uses'=>'Admin\ServiceController@show','as'=>'showService','roles'=>['superadmin']]);
    Route::get('editService/{id}', ['uses'=>'Admin\ServiceController@edit','as'=>'editService','roles'=>['superadmin']]);
    Route::patch('updateService/{id}',['uses'=>'Admin\ServiceController@update','as'=>'updateService','roles'=>['superadmin']]);
    Route::post('servicePost', 'Admin\ServiceController@store')->name('servicePost');
    Route::get('destroyService/{id}', ['uses'=>'Admin\ServiceController@destroy','as'=>'destroyService','roles'=>['superadmin']]);


    //Aboutus add,edit,delete

    Route::get('/aboutus', ['uses' => 'Admin\AboutusController@index', 'as' => 'aboutusindex', 'roles' => ['superadmin']]);
    Route::get('/writeaboutus', ['uses' => 'Admin\AboutusController@create', 'as' => 'createaboutus', 'roles' => ['superadmin']]);
    Route::get('showaboutus/{id}', ['uses'=>'Admin\AboutusController@show','as'=>'showaboutus','roles'=>['superadmin']]);
    Route::get('editaboutus/{id}', ['uses'=>'Admin\AboutusController@edit','as'=>'editaboutus','roles'=>['superadmin']]);
    Route::get('destroyaboutus/{id}', ['uses'=>'Admin\AboutusController@destroy','as'=>'destroyaboutus','roles'=>['superadmin']]);
    Route::post('aboutusPost', 'Admin\AboutusController@store')->name('aboutusPost');
    Route::patch('updateaboutus/{id}',['uses'=>'Admin\AboutusController@update','as'=>'updateaboutus','roles'=>['superadmin']]);

    Route::resource('contact','Admin\ContactController');
    Route::resource('message','Admin\MessageController');

});