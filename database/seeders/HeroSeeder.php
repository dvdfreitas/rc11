<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heroes')->insert([
            'title' => 'FCP',
            'image' => 'fcp.jpg',
        ]);

        DB::table('heroes')->insert([
            'title' => 'Zaidu',
            'image' => 'zaidu.jpeg',
        ]);

        DB::table('heroes')->insert([
            'title' => 'Lucho',
            'image' => 'lucho.jpeg',
        ]);
    }
}
