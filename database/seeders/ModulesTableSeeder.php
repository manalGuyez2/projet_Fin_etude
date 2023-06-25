<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           DB::table('modules')->delete();

        $S5SemesterId = DB::table('semesters')->where('name', 'S5')->value('id');
       
    
        DB::table('modules')->insert([
            ['name' => 'CONCEPTION ORIENTEE OBJETS', 'semester_id' => $S5SemesterId],
            ['name' => 'PROGRAMMATION ORIENTEE OBJETS', 'semester_id' => $S5SemesterId],
            ['name' => 'RECHERCHE OPERATIONNELLE', 'semester_id' => $S5SemesterId],
            ['name' => 'RESEAUX', 'semester_id' => $S5SemesterId],
            ['name' => 'COMPILATION', 'semester_id' => $S5SemesterId],
            ['name' => 'BASES DE DONNEES', 'semester_id' => $S5SemesterId],
        ]);
    }
}
