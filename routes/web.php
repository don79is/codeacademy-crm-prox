<?php


use App\Models\Prpersons;

    Route::get('/', function () {

    return  Prpersons::get();
});


    Route::get('/new-person', function () {

    return Prpersons::create([
        'id' => Ramsey\Uuid\Uuid::uuid4(),
        'name'=>'Algis',
        'email'=>'doni79@mail.com',
        'phone'=>'86707579'

    ]);
    });
