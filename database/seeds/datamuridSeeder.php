<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class datamuridSeeder extends Seeder
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
            DB:: table('datamurid')->insert([
                'nis' => $Faker->numerify('rpl###'),
                'nama' => $Faker->name,
                'kelas' => $Faker->numerify('#-RPL-#'),
                'nohp' =>$Faker->numerify('+62####'),
            ]);
        }
    }
}