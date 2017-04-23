<?php

Route::get('/persons',[

    'uses' => 'PrPersonsController@index'

]);

Route::get('/generate-fake-data/persons/{count?}',[

    'uses' => 'FakeDataController@generatePersons'

    ]);

Route::get('/client',[

    'uses' => 'PrClientController@index'

]);

Route::get('/generate-fake-data/client/{count?}',[

    'uses' => 'FakeDataController@generateClient'

]);








