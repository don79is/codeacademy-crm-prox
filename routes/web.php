<?php

Route::get('/persons', [
    'uses' => 'PrPersonsController@index'

]);

Route::get('/generate-fake-data/persons/{count?}', [
    'uses' => 'FakeDataController@generatePersons'

]);


Route::get('/client', [
    'uses' => 'PrClientController@index'

]);

Route::get('/generate-fake-data/client/{count?}', [
    'uses' => 'FakeDataController@generateClient'

]);


Route::get('/projects', [
    'uses' => 'PrProjectsController@index'

]);

Route::get('/generate-fake-data/projects/{count?}', [
    'uses' => 'FakeDataController@generateProjects'

]);


Route::get('/projectsTypes', [
    'uses' => 'PrProjectsTypesController@index'

]);

Route::get('/generate-fake-data/projectsTypes/{count?}', [
    'uses' => 'FakeDataController@generateProjectsTypes'

]);

Route::get('/clientPersonsPositions', [
    'uses' => 'PrClientPersonsPositionsController@index'

]);

Route::get('/generate-fake-data/projectsTypes/{count?}', [
    'uses' => 'FakeDataController@generateClientPersonsPositions'

]);

Route::get('/logins', [
    'uses' => 'PrLoginsController@index'

]);

Route::get('/generate-fake-data/logins/{count?}', [
    'uses' => 'FakeDataController@generateLogins'
]);

Route::get('/loginsNames', [
    'uses' => 'PrLoginsNamesController@index'

]);

Route::get('/generate-fake-data/loginsNames/{count?}', [
    'uses' => 'FakeDataController@generateLoginsNames'
]);

Route::get('/loginsProjectsConnections', [
    'uses' => 'PrLoginsProjectsConnectionsController@index'

]);

Route::get('/generate-fake-data/loginsProjectsConnections/{count?}', [
    'uses' => 'FakeDataController@generateLoginsProjectsConnections'
]);

Route::get('/personTypes', [
    'uses' => 'PrPersonTypesController@index'

]);

Route::get('/generate-fake-data/personTypes/{count?}', [
    'uses' => 'FakeDataController@generatePersonTypes'
]);

Route::get('/personsProjectTypeConnections', [
    'uses' => 'PrPersonsProjectTypeConnectionsController@index'

]);

Route::get('/generate-fake-data/personsProjectTypeConnections/{count?}', [
    'uses' => 'FakeDataController@generatePersonsProjectTypeConnections'
]);

Route::get('/clientPersonsConnections', [
    'uses' => 'PrClientPersonsConnectionsController@index'

]);

Route::get('/generate-fake-data/clientPersonsConnections/{count?}', [
    'uses' => 'FakeDataController@generateClientPersonsConnections'
]);













