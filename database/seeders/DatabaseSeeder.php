<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(4)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


           Person::create([
            'firstname' => 'Kora', 
           'lastname' => 'Mekins',
            'age' => '21',
            'gender' => 'Kobieta',
           'zipcode' => '12569',
           'city' => 'Poznan',
            'street'=> 'Kowalowa',
            'housenumber' => '20',
            'apartmentnumber' => '19'
        ]);
        Person::create([
            'firstname' => 'Lora', 
           'lastname' => 'Mekins',
            'age' => '21',
            'gender' => 'Kobieta',
           'zipcode' => '12569',
           'city' => 'Poznan',
            'street'=> 'Kowalowa',
            'housenumber' => '20',
            'apartmentnumber' => '19'
        ]);

    }
}
