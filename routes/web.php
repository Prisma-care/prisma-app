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

// carehomes
Route::get('/', 'CarehomesController@index');
Route::get('/carehomes/create', ['as' => 'carehomes.create', 'uses' => 'CarehomesController@create']);
Route::get('/airtable', ['as' => 'airtable', 'uses' => 'CarehomesController@airtable']);

// residents
Route::get('/residents', ['as' => 'residents.index', 'uses' => 'ResidentsController@index']);
Route::get('residents/show', ['as' => 'residents.show', 'uses' => 'ResidentsController@show']);
Route::get('residents/create', ['as' => 'residents.create', 'uses' => 'ResidentsController@create']);
//Route::get('residents/1/stories', ['as' => 'residents.stories', 'uses' => 'ResidentsController@stories']);
Route::get('residents/1/preferences', ['as' => 'residents.preferences', 'uses' => 'ResidentsController@preferences']);
Route::get('residents/1/family', ['as' => 'residents.family', 'uses' => 'ResidentsController@family']);
Route::get('residents/1/family/invite', ['as' => 'residents.familyinvite', 'uses' => 'ResidentsController@invite']);
Route::get('residents/1/story/create', ['as' => 'residents.storycreate', 'uses' => 'ResidentsController@storycreate']);
Route::get('residents/1/profile/edit', ['as' => 'residents.profile.edit', 'uses' => 'ResidentsController@edit']);
Route::get('residents/feron/stories', ['as' => 'residents.stories', 'uses' => 'ResidentsController@stories']);
Route::get('residents/mariejoseemertens/stories', ['as' => 'residents.stories', 'uses' => 'ResidentsController@stories']);
Route::get('residents/rosemariedrouet/stories', ['as' => 'residents.stories', 'uses' => 'ResidentsController@stories']);
Route::get('residents/georgetteveekmans/stories', ['as' => 'residents.stories', 'uses' => 'ResidentsController@stories']);
Route::get('residents/ericengelen/stories', ['as' => 'residents.stories', 'uses' => 'ResidentsController@stories']);
Route::get('residents/rosaandries/stories', ['as' => 'residents.stories', 'uses' => 'ResidentsController@stories']);
Route::get('residents/louisadevos/stories', ['as' => 'residents.stories', 'uses' => 'ResidentsController@stories']);
Route::get('residents/miaons/stories', ['as' => 'residents.stories', 'uses' => 'ResidentsController@stories']);
Route::get('residents/magdawouters/stories', ['as' => 'residents.stories', 'uses' => 'ResidentsController@stories']);
Route::get('residents/irmavanrossem/stories', ['as' => 'residents.stories', 'uses' => 'ResidentsController@stories']);
//Route::get('residents/{name}/stories', ['as' => 'residents.stories', 'uses' => 'ResidentsController@stories']);


// families
Route::get('families/invite', ['as' => 'families.invite', 'uses' => 'FamiliesController@invite']);

// preferences
Route::get('preferences/edit', ['as' => 'preferences.edit', 'uses' => 'PreferencesController@edit']);

// stories
Route::get('stories/create', ['as' => 'stories.create', 'uses' => 'StoriesController@create']);

