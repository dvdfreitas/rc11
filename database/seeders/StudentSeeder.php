<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('students')->truncate();

        DB::table('students')->insert([
            'id' => 113667,
            'name' => 'Tiago Vilela',
            'email' => 'a113667@aeg1.pt'
        ]);

        DB::table('students')->insert([
            'id' => 111615,
            'name' => 'Rafael Silva',
            'email' => 'a111615@aeg1.pt'
        ]);

        DB::table('students')->insert([
            'id' => 113848,
            'name' => 'Tomás Gondar',
            'email' => 'a113848@aeg1.pt'
        ]);
    }
}
