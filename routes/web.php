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

//game
Route::get('/home/game', 'GameController@index')->name('game');
Route::post('/home/check_cookie', 'GameController@check_cookie')->name('cookie');
Route::post('/home/get_score', 'GameController@get_score')->name('score_get');

Route::middleware(['auth','admin'])->group(function(){
	//blog
    Route::get('/admin/blog', 'BlogController@index')->name('blog');
    Route::post('/admin/save_blog', 'BlogController@save_blog');
    Route::get('/admin/add_blog', 'BlogController@add_blog');
    Route::get('/delete_blog/{id}','BlogController@delete_blog')->name('delete_blog');
    Route::get('/edit_blog/{id}','BlogController@edit_blog')->name('edit_blog');
    Route::post('/update_blog/{id}','BlogController@update_blog')->name('update_blog');

    //about
    Route::get('/admin/about', 'AboutController@index')->name('about');
    Route::post('/admin/save_about', 'AboutController@save_about');
    Route::get('/admin/add_about', 'AboutController@add_about');
    Route::get('/delete_about/{id}','AboutController@delete_about')->name('delete_about');
    Route::get('/edit_about/{id}','AboutController@edit_about')->name('edit_about');
    Route::post('/update_about/{id}','AboutController@update_about')->name('update_about');



    //social networks
    Route::get('/admin/social_networks', 'SocialNetworksController@index')->name('social_networks');
    Route::post('/admin/save_social_networks', 'SocialNetworksController@save_social_networks');
    Route::get('/admin/add_social_networks', 'SocialNetworksController@add_social_networks');
    Route::get('/delete_social_networks/{id}','SocialNetworksController@delete_social_networks')->name('delete_social_networks');
    Route::get('/edit_social_networks/{id}','SocialNetworksController@edit_social_networks')->name('edit_social_networks');
    Route::post('/update_social_networks/{id}','SocialNetworksController@update_social_networks')->name('update_social_networks');




   //Settings

    Route::get('/admin/adminSettings', 'UserController@index')->name('adminSettings');
    Route::get('/delete_adminSettings/{id}','UserController@delete_adminSettings')->name('delete_adminSettings');
    Route::get('/edit_adminSettings/{id}','UserController@edit_adminSettings')->name('edit_adminSettings');
    Route::post('/update_adminSettings/{id}','UserController@update_adminSettings')->name('update_adminSettings');


    //photogallery
    Route::get('/admin/photo_gallery', 'GalleryController@index')->name('photo_gallery');
    Route::post('/admin/save_photo_gallery', 'GalleryController@save_photo_gallery');
    Route::get('/admin/add_photo_gallery', 'GalleryController@add_photo_gallery');
    Route::get('/delete_photo_gallery/{id}','GalleryController@delete_photo_gallery')->name('delete_photo_gallery');
    Route::get('/edit_photo_gallery/{id}','GalleryController@edit_photo_gallery')->name('edit_photo_gallery');
    Route::post('/update_photo_gallery/{id}','GalleryController@update_photo_gallery')->name('update_photo_gallery');


    //gallery
    Route::get('/admin/video_gallery', 'VideoController@index')->name('video_gallery');
    Route::post('/admin/save_video_gallery', 'VideoController@save_video_gallery');
    Route::get('/admin/add_video_gallery', 'VideoController@add_video_gallery');
    Route::get('/delete_video_gallery/{id}','VideoController@delete_video_gallery')->name('delete_video_gallery');
    Route::get('/edit_video_gallery/{id}','VideoController@edit_video_gallery')->name('edit_video_gallery');
    Route::post('/update_video_gallery/{id}','VideoController@update_video_gallery')->name('update_video_gallery');

    //interview
    Route::get('/admin/interview', 'InterviewController@index')->name('interview');
    Route::post('/admin/save_interview', 'InterviewController@save_interview');
    Route::get('/admin/add_interview', 'InterviewController@add_interview');
    Route::get('/delete_interview/{id}','InterviewController@delete_interview')->name('delete_interview');
    Route::get('/edit_interview/{id}','InterviewController@edit_interview')->name('edit_interview');
    Route::post('/update_interview/{id}','InterviewController@update_interview')->name('update_interview');

    //banners
    Route::get('/admin/banners', 'BannersController@index')->name('banners');
    Route::post('/admin/save_banners', 'BannersController@save_banners');
    Route::get('/admin/add_banners', 'BannersController@add_banners');
    Route::get('/delete_banners/{id}','BannersController@delete_banners')->name('delete_banners');
    Route::get('/edit_banners/{id}','BannersController@edit_banners')->name('edit_banners');
    Route::post('/update_banners/{id}','BannersController@update_banners')->name('update_banners');
    Route::get('/admin', function () {
            return view('admin_view.layouts.admin');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MainController@index')->name('welcome');
Route::post('/','MainController@loadDataAjax')->name('loadBlog');
