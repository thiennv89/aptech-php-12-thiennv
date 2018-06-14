<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class InforsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $value) {
            DB::table('infors')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
            ]);
        }
    }
}
