<?php

use Illuminate\Database\Seeder;

class 13399_VaniaP extends Seeder
{
     public function run()
    {
        $faker = Faker\Factory::create(); //import library faker
        $limit = 10; //batasan berapa banyak data
        for ($i = 0; $i < $limit; $i++) {
            DB::table('vania')->insert([ //mengisi datadi database
                'nama' => $faker->name,
                'email' => $faker->unique()->email, //email unique sehingga tidak ada yang sama
                'nohp' => $faker->phoneNumber,
                'alamat' => $faker->address,
            ]);
        }
	}
}