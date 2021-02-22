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

Route::middleware(\App\Http\Middleware\LangMiddleware::class)->group(function () {

    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/logout', 'AdminController@logout')->name('admin.logout');
    Route::get('/lang/{lang}', 'AdminController@changeLang')->name('admin.changeLang');

    // users
    Route::resource('users', 'UsersController');
    Route::post('users/multi_delete', 'UsersController@multi_delete')->name('users.multi_delete');

    // roles and permissions
    Route::resource('roles', 'RoleController');
    Route::post('/roles/multi_delete', 'RoleController@multi_delete')->name('roles.multi_delete');

    Route::resource('permissions', 'PermissionController');
    Route::post('permissions/multi_delete', 'PermissionController@multi_delete')->name('permissions.multi_delete');

    // Posts
    Route::resource('posts', 'PostController');
    Route::post('posts/multi_delete', 'PostController@multi_delete')->name('posts.multi_delete');

    // English Posts
    Route::resource('eposts', 'EpostController');
    Route::post('eposts/multi_delete', 'EpostController@multi_delete')->name('eposts.multi_delete');

    // Video Posts
    Route::resource('vposts', 'VpostController');
    Route::post('vposts/multi_delete', 'VpostController@multi_delete')->name('vposts.multi_delete');

    // English Video Posts
    Route::resource('evposts', 'EvpostController');
    Route::post('evposts/multi_delete', 'EvpostController@multi_delete')->name('evposts.multi_delete');

    // Post taqs_
    Route::resource('ptaqs', 'PtaqController');
    Route::post('ptaqs/multi_delete', 'PtaqController@multi_delete')->name('ptaqs.multi_delete');

    // English Post Taqs
    Route::resource('eptaqs', 'EptaqController');
    Route::post('eptaqs/multi_delete', 'EptaqController@multi_delete')->name('eptaqs.multi_delete');

    // Video taqs_
    Route::resource('vtaqs', 'VtaqController');
    Route::post('vtaqs/multi_delete', 'VtaqController@multi_delete')->name('vtaqs.multi_delete');

    // English Video taqs_
    Route::resource('evtaqs', 'EvtaqController');
    Route::post('evtaqs/multi_delete', 'EvtaqController@multi_delete')->name('evtaqs.multi_delete');


    // Post Categories
    Route::resource('pcategories', 'PcategoryController');
    Route::post('pcategories/multi_delete', 'PcategoryController@multi_delete')->name('pcategories.multi_delete');

    // English Post Categories
    Route::resource('epcategories', 'EpcategoryController');
    Route::post('epcategories/multi_delete', 'EpcategoryController@multi_delete')->name('epcategories.multi_delete');

    // Video Post Categories
    Route::resource('vcategories', 'VcategoryController');
    Route::post('vcategories/multi_delete', 'VcategoryController@multi_delete')->name('vcategories.multi_delete');

    // English Video Post Categories
    Route::resource('evcategories', 'EvcategoryController');
    Route::post('evcategories/multi_delete', 'EvcategoryController@multi_delete')->name('evcategories.multi_delete');

    // Website Setting
    Route::resource('settings', 'SettingController');
    Route::post('settings/multi_delete', 'EvcategoryController@multi_delete')->name('settings.multi_delete');


  //  Route::get('get-user-answers', 'AnswersController@user_answers')->name('user_answers.index');
});
