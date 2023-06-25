<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemestersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('semesters')->insert([
            ['name' => 'S1'],
            ['name' => 'S2'],
            ['name' => 'S3'],
            ['name' => 'S4'],
            ['name' => 'S5'],
            ['name' => 'S6'],
        ]);
    }
}
