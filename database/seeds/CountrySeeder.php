<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Country::create(
            [
                'name'=>'Belarus',
            ]
        );

        \App\Country::create(
            [
                'name'=>'Litva',
            ]
        );
        \App\Country::create(
            [
                'name'=>'Russia',
            ]
        );
    }
}
