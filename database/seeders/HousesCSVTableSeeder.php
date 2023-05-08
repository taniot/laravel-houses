<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HousesCSVTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_file = __DIR__.'/csv/houses.csv';

        $houses = Helpers::getCSV($current_file);

        foreach($houses as $house){
            $newHouse = new House();
            $newHouse->reference = $house['reference'];
            $newHouse->address =  $house['address'];
            $newHouse->postal_code =  $house['postal_code'];
            $newHouse->city =  $house['city'];
            $newHouse->state =  $house['state'];
            $newHouse->square_meters = $house['square_meters'];
            $newHouse->rooms =  $house['rooms'];
            $newHouse->bathrooms = $house['bathrooms'];
            $newHouse->type =  $house['type'];
            $newHouse->description =  $house['description'];
            $newHouse->price =  $house['price'];
            $newHouse->is_available =  $house['is_available'];
            $newHouse->save();
        }

    }

    // public function getCSV(string $file_stream)
    // {
    //     $labels = [];
    //     $result = [];

    //     $row = 1;
    //     if (($handle = fopen($file_stream, "r")) !== FALSE) {

    //         while (($data = fgetcsv($handle)) !== FALSE) {

    //             $current_row = [];
    //             if ($row === 1) {
    //                 foreach ($data as $label) {
    //                     $labels[] = trim(strtolower($label));
    //                 }
    //             } else {
    //                 foreach ($data as $key => $value) {
    //                     $current_key = $labels[$key];
    //                     $current_row[$current_key] = $value;
    //                 }
    //                 array_push($result, $current_row);
    //             }

    //             $row++;
    //         }

    //         fclose($handle);

    //         return $result;
    //     }
    // }
}
