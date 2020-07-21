<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class datatamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $Faker = Faker::create('id_ID');
        for ($i=1; $i <= 50; $i++){
            DB:: table('datatamu')->insert([
                'nama' => $Faker->name,
                'email' => $Faker->email,
                'komen' => $Faker->text(200)
                
            ]);
        }
    }
}