<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zonas = ['PORTALES', 'HUACACHINA', 'POLLITOS', 'CASUARINAS', 'VILLA', 'PALMA', 'MODERNA'];

        foreach($zonas as $zona){
            DB::table('zonas')->insert([
                'nombre' => $zona
            ]);
        }
    }
}
