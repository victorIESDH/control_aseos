<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class alumno extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Utiliza el factory para crear 50 alumnos falsos
        \App\Models\alumno::factory(50)->create();
    }
}
