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

Route::get('/','Client\ClientController@index');
Route::get('career_advancement','Client\ClientController@career');
Route::get('access','Client\ClientController@access');
Route::get('school','Client\ClientController@school');
Route::get('department','Client\ClientController@department');
Route::get('admission','Client\ClientController@admission');
Route::get('document_request','Client\ClientController@document_request');
Route::get('cast-paper','Client\ClientController@castpaper');
Route::get('honka','Client\ClientController@honka');
Route::get('management-team','Client\ClientController@management_team');
Route::get('experience','Client\ClientController@experience_class');

Route::get('application-form','Client\OnlineFormController@online_form');
Route::post('application-form','Client\OnlineFormController@store');
Route::get('experience-class','Client\ExperienceClassController@index');
Route::post('experience-class','Client\ExperienceClassController@store');

Route::get('information-list','Client\ClientController@information');
Route::get('information-list/{id}','Client\ClientController@info_details_view');
/*Graduate page*/
Route::get('student-graduate','Client\ClientController@student_graduate');
Route::get('student-details/view/{id}','Client\ClientController@student_details');

Route::get('applicants_guideline','Client\OnlineFormController@applicants_guidline');


Route::any('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('home', 'Client\ClientController@index')->name('home');
Route::get('lang/{locale}', 'LocalizationController@index');

Route::group(['middleware'=>'admin','prefix'=>'admin','namespace'=>'Admin'],function (){
    Route::get('lang/{locale}', 'AdminController@language');
    Route::get('','AdminController@index');
    Route::get('create_event','EventController@create');
    Route::post('create_event','EventController@store');
    Route::any('list_events','EventController@index');
    Route::get('list_events/edit_events/{id}','EventController@edit');
    Route::post('list_events/edit_events/{id}','EventController@update');
    Route::get('list_events/edit_events/{id}/delete','EventController@destroy');

    /*Category Control*/
    Route::get('categories','CategoryController@index');
    Route::post('categories','CategoryController@store');
    Route::get('categories/{id}','CategoryController@edit');
    Route::post('categories/{id}','CategoryController@update');

    /*Footer Control*/
    Route::any('add-footer','FooterController@add_footer');
    Route::any('view-footer','FooterController@view_footer');

    /*Slide Controller */
    Route::any('add-slide','SlideController@add_slide');
    Route::any('list-slide','SlideController@view_slide');
    /*Information Controller */
    Route::any('create-information','InformationController@index');
    Route::post('create-information','InformationController@store');
    Route::get('list-information','InformationController@view');
    Route::get('list-information/edit-information/{id}','InformationController@edit');
    Route::post('list-information/edit-information/{id}','InformationController@update');
    Route::get('list-information/{id}/delete','InformationController@destroy');
 /*Graduate Controller */
    Route::any('create-graduate','GraduateController@index');
    Route::post('create-graduate','GraduateController@store');
    Route::get('create-graduate/edit-graduate/{id}','GraduateController@edit');
    Route::post('create-graduate/edit-graduate/{id}','GraduateController@update');
    Route::any('list-graduate-student','GraduateController@list_student');
    Route::get('list-graduate-student/{id}/delete','GraduateController@destroy');
});