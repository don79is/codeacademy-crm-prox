<?php

use App\Models\PrClientPersonsConnections;
use App\Models\PrLoginsProjectsConnections;

Route::get('/', function () {

return PrLoginsProjectsConnections::with('loginData','projectsData')->get();


    });






Route::group(['prefix' => '/persons'],function () {

    Route::get('/', [
        'uses' => 'PrPersonsController@index'
    ]);
    Route::get('/ProjectTypeConnections', [
        'uses' => 'PrPersonsProjectTypeConnectionsController@index'
    ]);
    Route::get('/Types', [
        'uses' => 'PrPersonsTypesController@index'
    ]);
});

Route::group(['prefix' => '/client'],function () {

    Route::get('/', [
        'uses' => 'PrClientController@index'
    ]);
    Route::get('/PersonsPositions', [
        'uses' => 'PrClientPersonsPositionsController@index'
    ]);
    Route::get('/PersonsConnections', [
        'uses' => 'PrClientPersonsConnectionsController@index'
    ]);
});



Route::get('/projects', [
    'uses' => 'PrProjectsController@index'
]);
Route::get('/projectsTypes', [
    'uses' => 'PrProjectsTypesController@index'
]);








Route::get('/logins', [
    'uses' => 'PrLoginsController@index'
]);
Route::get('/loginsNames', [
    'uses' => 'PrLoginsNamesController@index'
]);
Route::get('/loginsProjectsConnections', [
    'uses' => 'PrLoginsProjectsConnectionsController@index'
]);













Route::get('/generate-fake-data/clientPersonsConnections/{count?}', [
    'uses' => 'FakeDataController@generateClientPersonsConnections'
]);
Route::get('/generate-fake-data/persons/{count?}', [
    'uses' => 'FakeDataController@generatePersons'
]);
Route::get('/generate-fake-data/client/{count?}', [
    'uses' => 'FakeDataController@generateClient'
]);
Route::get('/generate-fake-data/personsProjectTypeConnections/{count?}', [
    'uses' => 'FakeDataController@generatePersonsProjectTypeConnections'
]);
Route::get('/generate-fake-data/personsTypes/{count?}', [
    'uses' => 'FakeDataController@generatePersonsTypes'
]);
Route::get('/generate-fake-data/loginsProjectsConnections/{count?}', [
    'uses' => 'FakeDataController@generateLoginsProjectsConnections'
]);
Route::get('/generate-fake-data/loginsNames/{count?}', [
    'uses' => 'FakeDataController@generateLoginsNames'
]);
Route::get('/generate-fake-data/logins/{count?}', [
    'uses' => 'FakeDataController@generateLogins'
]);
Route::get('/generate-fake-data/clientPersonsPositions/{count?}', [
    'uses' => 'FakeDataController@generateClientPersonsPositions'
]);
Route::get('/generate-fake-data/projectsTypes/{count?}', [
    'uses' => 'FakeDataController@generateProjectsTypes'
]);
Route::get('/generate-fake-data/projects/{count?}', [
    'uses' => 'FakeDataController@generateProjects'
]);













