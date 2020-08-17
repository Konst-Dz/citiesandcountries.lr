<?php

use Illuminate\Database\Seeder;
use App\City;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create(
            [
                'name'=>'Homel',
                'country_id' =>1
            ]
        );
        City::create(
            [
                'name'=>'Mozyr',
                'country_id' =>1
            ]
        );

        City::create(
            [
                'name'=>'Vilnus',
                'country_id' =>2
            ]
        );
        City::create(
            [
                'name'=>'Shaulai',
                'country_id' =>2
            ]
        );
        City::create(
            [
                'name'=>'Orel',
                'country_id' =>3
            ]
        );
        City::create(
            [
                'name'=>'Moskow',
                'country_id' =>3
            ]
        );
    }
}
