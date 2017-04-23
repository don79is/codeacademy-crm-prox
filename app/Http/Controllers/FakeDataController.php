<?php

namespace App\Http\Controllers;

use App\Models\PrClient;
use App\Models\PrPersons;
use Faker\Factory;
use Illuminate\Http\Request;

class FakeDataController extends Controller
{
    public function generatePersons(int $count = 10)
    {
        $faker = Factory::create();


        for ($i = 0; $i < $count; $i++) {
            PrPersons::create([
                'id' => $faker->uuid,
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber
            ]);

        }
    }

    public function generateClient(int $count = 1)
    {
        $faker = Factory::create();


        for ($i = 0; $i < $count; $i++) {
            PrClient::create([
                'id' => $faker->uuid,
                'name' => $faker->name
            ]);

        }
    }
}

