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
Route::get('lang/{locale}',function($locale='en'){
	App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});



//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/services', 'HomeController@services');
Route::get('/service_details/{id}', 'HomeController@serviceDetails');
Route::get('/projects', 'HomeController@projects');
Route::get('/project_details/{id}', 'HomeController@projectDetails');
Route::get('/gallery', 'HomeController@gallery');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact', 'HomeController@addContact');

//admin routes
Auth::routes();


Route::get('/admin/login', 'Auth\LoginController@login')->name('login1');

Route::post('/admin/login', 'Auth\LoginController@checkLogin');


Route::group(['middleware' => ['auth']], function() {

    Route::get('/adminpanel', 'Admin\AdminController@dashboard');
    Route::get('/admin/dashboard', 'Admin\AdminController@dashboard');
    ////
    Route::get('/admin/site_data', 'Admin\SiteDataController@siteData');
    Route::post('/admin/site_data/edit', 'Admin\SiteDataController@siteData_edit');
    ////
    Route::get('/admin/whyus', 'Admin\WhyUsController@whyUs');
    Route::get('/admin/whyus/edit/{id}', 'Admin\WhyUsController@whyUs_edit');
    Route::post('/admin/whyus/update', 'Admin\WhyUsController@whyUs_update');
    ////
    Route::get('/admin/slider', 'Admin\SliderController@slider');
    Route::get('/admin/slider/modal', 'Admin\SliderController@slider_modal');
    Route::post('/admin/slider/add', 'Admin\SliderController@slider_add');
    Route::get('/admin/slider/edit/{id}', 'Admin\SliderController@slider_edit');
    Route::post('/admin/slider/update', 'Admin\SliderController@slider_update');
    Route::get('/admin/slider/delete/{id}', 'Admin\SliderController@slider_delete');
    ////
    Route::get('/admin/category', 'Admin\CategoryController@category');
    Route::get('/admin/category/modal', 'Admin\CategoryController@category_modal');
    Route::post('/admin/category/add', 'Admin\CategoryController@category_add');
    Route::get('/admin/category/edit/{id}', 'Admin\CategoryController@category_edit');
    Route::post('/admin/category/update', 'Admin\CategoryController@category_update');
    Route::get('/admin/category/delete/{id}', 'Admin\CategoryController@category_delete');
    ////
    Route::get('/admin/project', 'Admin\ProjectController@project');
    Route::get('/admin/project/modal', 'Admin\ProjectController@project_modal');
    Route::post('/admin/project/add', 'Admin\ProjectController@project_add');
    Route::get('/admin/project/edit/{id}', 'Admin\ProjectController@project_edit');
    Route::post('/admin/project/update', 'Admin\ProjectController@project_update');
    Route::get('/admin/project/delete/{id}', 'Admin\ProjectController@project_delete');

    
    Route::get('/admin/project/images/{id}','Admin\ProjectController@images');
    Route::post('/admin/project/images/add','Admin\ProjectController@images_add');
    Route::get('/admin/project/image/delete/{id}','Admin\ProjectController@image_delete');
    ////
    Route::get('/admin/service', 'Admin\ServiceController@service');
    Route::get('/admin/service/modal', 'Admin\ServiceController@service_modal');
    Route::post('/admin/service/add', 'Admin\ServiceController@service_add');
    Route::get('/admin/service/edit/{id}', 'Admin\ServiceController@service_edit');
    Route::post('/admin/service/update', 'Admin\ServiceController@service_update');
    Route::get('/admin/service/delete/{id}', 'Admin\ServiceController@service_delete');
    //// 
    Route::get('/admin/gallery', 'Admin\GalleryController@gallery');
    Route::get('/admin/gallery/modal', 'Admin\GalleryController@gallery_modal');
    Route::post('/admin/gallery/add', 'Admin\GalleryController@gallery_add');
    Route::get('/admin/gallery/edit/{id}', 'Admin\GalleryController@gallery_edit');
    Route::post('/admin/gallery/update', 'Admin\GalleryController@gallery_update');
    Route::get('/admin/gallery/delete/{id}', 'Admin\GalleryController@gallery_delete');
    ////
    Route::get('/admin/video', 'Admin\VideoController@gallery');
    Route::get('/admin/video/modal', 'Admin\VideoController@gallery_modal');
    Route::post('/admin/video/add', 'Admin\VideoController@gallery_add');
    Route::get('/admin/video/edit/{id}', 'Admin\VideoController@gallery_edit');
    Route::post('/admin/video/update', 'Admin\VideoController@gallery_update');
    Route::get('/admin/video/delete/{id}', 'Admin\VideoController@gallery_delete');
    ////
    Route::get('/admin/contact', 'Admin\ContactController@contact');
    Route::get('/admin/contact/delete/{id}', 'Admin\ContactController@contact_delete');
    ////
    Route::get('/admin/setting', 'Admin\SettingController@setting');
    Route::post('/admin/setting/edit', 'Admin\SettingController@setting_edit');

    ////
    Route::get('/admin/logout', '\App\Http\Controllers\Auth\LoginController@logout');

});




