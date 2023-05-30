<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('people')->insert([
            'name'=>'Ronaldo',
            'telephone'=>'081888333777',
            'email'=> 'ronaldo7@gmail.com'
        ]);

        DB::table('people')->insert([
            'name'=>'Messi',
            'telephone'=>'081999355888',
            'email'=> 'leomessi10@gmail.com'
        ]);

        DB::table('people')->insert([
            'name'=>'Neymar',
            'telephone'=>'081111375999',
            'email'=> 'neymarjr11@gmail.com'
        ]);
    }
}
