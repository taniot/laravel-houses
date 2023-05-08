<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run(Faker $faker)
    {


        //array



        for($i = 0; $i < 50; $i++){
            $newHouse = new House();
            $newHouse->reference = $faker->bothify('??-####');
            $newHouse->address = $faker->streetAddress();
            $newHouse->postal_code = $faker->postcode();
            $newHouse->city = $faker->city();
            $newHouse->state = $faker->country();
            $newHouse->square_meters = $faker->numberBetween(60, 250);//random
            $newHouse->rooms = $faker->numberBetween(2, 10);
            $newHouse->bathrooms = $faker->numberBetween(1, 3);
            $newHouse->type = $faker->randomElement(['Appartamento', 'Casa in campagna', 'Attico', 'Sgabuzzino', 'Sottoponte']);
            $newHouse->description = $faker->text(200);
            $newHouse->price = $faker->randomFloat(2, 60000, 1000000);
            $newHouse->is_available = $faker->numberBetween(0, 1);
            $newHouse->save();
         }
    }
}
