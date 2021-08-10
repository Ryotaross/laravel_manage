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

Route::get('/', 'CaseController@index')->name('mission.index');

Route::get('/finish', 'CaseController@finish')->name('mission.finish');

Route::resource('/mission','MissionController')->except(['index']);

Route::post('/comp','MissionController@comp')->name('mission.comp');

Route::post('/recomp','MissionController@recomp')->name('mission.recomp');

Route::prefix('mission/{mission}')->group(function(){
    Route::resource('/event','EventController');
});

//Route::get('/mission/{mission}/event/finish', 'EventController@finish')->name('event.finish');

Route::post('/mission/{mission}/event/comp','EventController@comp')->name('event.comp');

Route::post('/mission/{mission}/event/recomp','EventController@recomp')->name('event.recomp');

Route::post('/mission/{mission}/event/showcomp','EventController@Showcomp')->name('eventShow.comp');

Route::post('/mission/{mission}/event/showrecomp','EventController@Showrecomp')->name('eventShow.recomp');

Route::get('/setEvents', 'EventController@setEvents');

Route::get('/calendar' ,'EventController@setCalendar')->name('calendar.show');



