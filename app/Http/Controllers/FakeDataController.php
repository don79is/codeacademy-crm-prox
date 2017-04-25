<?php

namespace App\Http\Controllers;

use App\Models\PrClient;


use App\Models\PrClientPersonsConnections;
use App\Models\PrClientPersonsPositions;
use App\Models\PrLogins;
use App\Models\PrLoginsNames;
use App\Models\PrLoginsProjectsConnections;
use App\Models\PrPersons;
use App\Models\PrPersonsProjectTypeConnections;
use App\Models\PrPersonTypes;
use App\Models\PrProjects;
use App\Models\PrProjectsTypes;
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
                'name' => $faker->name,
                'client_type' => $faker->randomElement(['J', 'F'])
            ]);

        }
    }

    public function generateProjects(int $count = 1)
    {
        $faker = Factory::create();


        for ($i = 0; $i < $count; $i++) {
            PrProjects::create([
                'id' => $faker->uuid,
                'name' => $faker->company,
                'type_id' => PrProjectsTypes::all()->random()->id,
                'description' => $faker->paragraph,
                'client_id' => PrClient::all()->random()->id

            ]);

        }
    }

    public function generateProjectsTypes(int $count = 1)
    {
        $faker = Factory::create();


        for ($i = 0; $i < $count; $i++) {
            PrProjectsTypes::create([
                'id' => $faker->uuid,
                'name' => $faker->randomElement(['logistic', 'finanses', 'ecology', 'education']),
                'types' => $faker->randomElement(['pirmas', 'antras', 'trecias']),
                'description' => $faker->paragraph
            ]);

        }
    }


    public function generateClientPersonsPositions(int $count = 1)
    {
        $faker = Factory::create();


        for ($i = 0; $i < $count; $i++) {
            PrClientPersonsPositions::create([
                'id' => $faker->uuid,
                'name' => $faker->randomElement(['soo', 'ogl', 'bbl', 'nba']),
                'description' => $faker->paragraph
            ]);

        }
    }

    public function generateLogins(int $count = 1)
    {
        $faker = Factory::create();


        for ($i = 0; $i < $count; $i++) {
            PrLogins::create([
                'id' => $faker->uuid,
                'user' => $faker->userName,
                'pass' => $faker->password,
                'login_url' => $faker->url,
                'login_name_id' => PrLoginsNames::all()->random()->id

            ]);

        }
    }

    public function generateLoginsNames(int $count = 1)
    {
        $faker = Factory::create();


        for ($i = 0; $i < $count; $i++) {
            PrLoginsNames::create([
                'id' => $faker->uuid,
                'name' => $faker->userName

            ]);

        }
    }

    public function generateLoginsProjectsConnections(int $count = 1)
    {
        $faker = Factory::create();


        for ($i = 0; $i < $count; $i++) {
            PrLoginsProjectsConnections::create([
                'id' => $faker->uuid,
                'login_id' => PrLogins::all()->random()->id,
                'projects_id' => PrProjects::all()->random()->id

            ]);

        }
    }

    public function generatePersonTypes(int $count = 1)
    {
        $faker = Factory::create();


        for ($i = 0; $i < $count; $i++) {
            PrPersonTypes::create([
                'id' => $faker->uuid,
                'name' => $faker->randomElement(['haker', 'mokinys', 'programuotojas', 'stazuotojas']),
                'description' => $faker->paragraph
            ]);

        }
    }

    public function generatePersonsProjectTypeConnections(int $count = 1)
    {
        $faker = Factory::create();


        for ($i = 0; $i < $count; $i++) {
            PrPersonsProjectTypeConnections::create([
                'id' => $faker->uuid,
                'name' => $faker->name,
                'project_id' => PrProjects::all()->random()->id,
                'persons_id' => PrPersons::all()->random()->id,
                'persons_types_id' => PrPersonTypes::all()->random()->id

            ]);

        }
    }

    public function generateClientPersonsConnections(int $count = 1)
    {
        $faker = Factory::create();


        for ($i = 0; $i < $count; $i++) {
            PrClientPersonsConnections::create([
                'id' => $faker->uuid,
                'client_id' => PrClient::all()->random()->id,
                'persons_id' => PrPersons::all()->random()->id,
                'positions_id' => PrClientPersonsPositions::all()->random()->id,
                'comment' => $faker->text

            ]);

        }
    }

}

