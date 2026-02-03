<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class aseo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Datos maestros para la tabla aseos
        \App\Models\aseo::create(['descripcion' => 'SUM chicos']);
        \App\Models\aseo::create(['descripcion' => 'SUM chicas']);
        \App\Models\aseo::create(['descripcion' => 'Informática chicos']);
        \App\Models\aseo::create(['descripcion' => 'Informática chicas']);
        for ($i = 1; $i <= 10; $i++) {
            \App\Models\aseo::create(['descripcion' => 'Aseo aula ' . $i]);
        }
           
    }
}
