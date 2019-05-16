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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('trang-chu.html', function () {
    return view('frontend.master');
});*/
// route::get('/', function () {
    // return view('frontend.master.home');
// });
/*Route::get('about', function () {
    return view('frontend.home.about');
});
*/
/*Route::get('services', function () {
    return view('frontend.home.services');
});
Route::get('team', function () {
    return view('frontend.home.team');
});
Route::get('departments', function () {
    return view('frontend.home.departments');
});
Route::get('gallery', function () {
    return view('frontend.home.gallery');
});
Route::get('blog', function () {
    return view('frontend.home.blog');
});
Route::get('contact-us', function () {
    return view('frontend.home.contact-us');
});
Route::get('blog-post', function () {
    return view('frontend.home.blog-post');
});
*/
/*Route::get('admin/home', function () {
    return view('backend.master.home');
});
Route::get('admin/lockscreen', function () {
    return view('backend.lockscreen');
});
Route::get('admin/calendar', function () {
    return view('backend.home.calendar');
});

Route::get('admin/users_list', function () {
    return view('backend.home.users_list');
});
Route::get('admin/user_profile', function () {
    return view('backend.home.user_profile');
});
Route::get('admin/adduser', function () {
    return view('backend.home.adduser');
});
Route::get('admin/deleted_users', function () {
    return view('backend.home.deleted_users');
});

*/

Route::namespace('Backend')->group(function(){

    Route::prefix('admin')->group(function(){


    Route::middleware('auth')->group(function(){
            Route::get('home', function () {
            return view('backend.master.home');
            });
             Route::get('logout','AuthController@logout')->name('admin.logout');

Route::resource('typeofnews','TypeofnewsController');
        Route::prefix('typeofnews')->group(function(){
            Route::get('list','TypeofnewsController@index')->name('admin.typeofnews.index');
            Route::get('add','TypeofnewsController@create')->name('admin.typeofnews.create');
            Route::post('add','TypeofnewsController@store')->name('admin.typeofnews.store');
            //Này là {id}/edit mới vào dc controller @@ show thì ko cần /edit l
            Route::get('{id}/edit','TypeofnewsController@edit')->name('admin.typeofnews.edit');
            Route::post('{id}','TypeofnewsController@update_post')->name('admin.typeofnews.update_post');
            // Route::put('{id}','RegionController@update')->name('admin.region.update');
            Route::delete('{id}','TypeofnewsController@destroy')->name('admin.typeofnews.destroy');
            });


Route::resource('category','CategoryController');
        Route::prefix('category')->group(function(){
            Route::get('list','CategoryController@index')->name('admin.category.index');
            Route::get('add','CategoryController@create')->name('admin.category.create');
            Route::post('add','CategoryController@store')->name('admin.category.store');
            Route::get('{id}/show','CategoryController@show')->name('admin.category.show');
            //Này là {id}/edit mới vào dc controller @@ show thì ko cần /edit l
            Route::get('{id}/edit','CategoryController@edit')->name('admin.category.edit');
            Route::post('{id}','CategoryController@update_post')->name('admin.category.update_post');
            // Route::put('{id}','RegionController@update')->name('admin.region.update');
            Route::delete('{id}','CategoryController@destroy')->name('admin.category.destroy');
            });

Route::resource('product','ProductController');
        Route::prefix('product')->group(function(){
            Route::get('list','ProductController@index')->name('admin.product.index');
            Route::get('add','ProductController@create')->name('admin.product.create');
            Route::post('add','ProductController@store')->name('admin.product.store');
            Route::get('{id}/show','ProductController@show')->name('admin.product.show');
            //Này là {id}/edit mới vào dc controller @@ show thì ko cần /edit l
            Route::get('{id}/edit','ProductController@edit')->name('admin.product.edit');
            Route::post('{id}','ProductController@update_post')->name('admin.product.update_post');
            // Route::put('{id}','RegionController@update')->name('admin.region.update');
            Route::delete('{id}','ProductController@destroy')->name('admin.product.destroy');
            });

Route::resource('news','NewsController');
        Route::prefix('news')->group(function(){
            Route::get('list','NewsController@index')->name('admin.news.index');
            Route::get('add','NewsController@create')->name('admin.news.create');
            Route::get('add','NewsController@create')->name('admin.news.create');
            Route::post('add','NewsController@store')->name('admin.news.store');
            //Này là {id}/edit mới vào dc controller @@ show thì ko cần /edit l
             Route::get('{id}/show','NewsController@show')->name('admin.news.show');
            Route::get('{id}/edit','NewsController@edit')->name('admin.news.edit');
            Route::post('{id}','NewsController@update_post')->name('admin.news.update_post');
            // Route::put('{id}','RegionController@update')->name('admin.region.update');
            Route::delete('{id}','NewsController@destroy')->name('admin.news.destroy');
            });



            Route::resource('user','UserController');
        Route::prefix('user')->group(function(){
            Route::get('{id}/list','UserController@index')->name('admin.user.index');
            Route::get('{id}/add','UserController@create')->name('admin.user.create');
            Route::get('add','UserController@create')->name('admin.user.create');
            Route::post('add','UserController@store')->name('admin.user.store');
            //Này là {id}/edit mới vào dc controller @@ show thì ko cần /edit l
             Route::get('{id}/show','UserController@show')->name('admin.user.show');
            Route::get('{id}/edit','UserController@edit')->name('admin.user.edit');
            Route::post('{id}','UserController@update_post')->name('admin.user.update_post');
            // Route::put('{id}','RegionController@update')->name('admin.region.update');
            Route::delete('{id}','UserController@destroy')->name('admin.user.destroy');
            });

        });

        Route::get('login','AuthController@viewLogin')->name('admin.login');

        Route::post('login','AuthController@login');

        });
});


Route::namespace('Frontend')->group(function(){

    Route::prefix('site')->group(function(){
        Route::prefix('home')->group(function(){
            Route::get('/','HomeController@index')->name('site.home.index');
            Route::get('/about','HomeController@about')->name('site.home.about');
            Route::get('/department','HomeController@department')->name('site.home.department');
            Route::get('/gallery','HomeController@gallery')->name('site.home.gallery');
            Route::get('/get-region/{id}','HomeController@regionlist')->name('site.home.regionlist');
             Route::get('/get-hospital/{id}','HomeController@hospitallist')->name('site.home.hospitallist');
             Route::get('/get-department/{id}','HomeController@departmentlist')->name('site.home.departmentlist');
             Route::get('{id}/show','HomeController@show')->name('site.home.show');
             Route::get('/get-new/{id}','HomeController@newlist')->name('site.home.newlist');
             Route::get('{id}/detail','HomeController@detail')->name('site.home.detail');
            });
        Route::prefix('appointment')->group(function(){
            Route::post('add','AppointmentController@create')->name('site.appointment.create');
            Route::post('create','AppointmentController@add')->name('site.appointment.add');
            Route::get('{id}/list','AppointmentController@index')->name('site.appointment.index');
            Route::delete('{id}','AppointmentController@destroy')->name('site.appointment.destroy');
            Route::get('{id}/show','AppointmentController@show')->name('site.appointment.show');

            });
            Route::get('/finddoctor','FindController@get')->name('site.finddoctor.get');
            Route::get('/finddoctor/store','FindController@getStore')->name('site.finddoctor.getStore');
            Route::get('/doctorlist','FindController@doctorlist')->name('site.finddoctor.doctorlist');
            Route::get('/storelist','FindController@storelist')->name('site.finddoctor.storelist');


        Route::prefix('user')->group(function(){
            Route::get('{id}/add','UserController@create')->name('site.user.create');
            Route::post('/add','UserController@store')->name('site.user.store');
            //Này là {id}/edit mới vào dc controller @@ show thì ko cần /edit l
            Route::get('{id}/show','UserController@show')->name('site.user.show');
            Route::get('{id}/edit','UserController@edit')->name('site.user.edit');
            Route::post('{id}/update','UserController@update_post')->name('site.user.update_post');
            Route::post('{id}','UserController@verification')->name('site.user.verification');
            Route::get('/forgetpassword','UserController@forgetpassword')->name('site.user.forgetpassword');
            Route::post('{id}/getpassword','UserController@getpassword')->name('site.user.getpassword');
            Route::post('{id}/setpassword','UserController@setpassword')->name('site.user.setpassword');
            Route::post('{id}/setpassword1','UserController@setpassword1')->name('site.user.setpassword1');

            });
        Route::get('/logout','AuthController@logout')->name('site.logout');
        Route::get('/login','AuthController@viewLogin')->name('site.login');
        Route::post('/login','AuthController@login');
        });
});


