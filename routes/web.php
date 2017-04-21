<?php

Route::get('/persons',[

    'uses' => 'PrPersonsController@index'

]);

Route::get('/generate-fake-data/persons/{count?}',[

    'uses' => 'FakeDataController@generatePersons'

    ]);








