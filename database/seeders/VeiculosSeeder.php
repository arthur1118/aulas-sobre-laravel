<?php

namespace Database\Seeders;

use App\Models\Veiculos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VeiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //vai ser executado
        //nome da model
        Veiculos::create([
            'nome' => 'Fusca',
            'marca' => 'Volkswagen',
            'ano' => 1969
        ]);
        Veiculos::create([
            'nome' => 'civic',
            'marca' => 'honda',
            'ano' => 1987
        ]);
        Veiculos::create([
            'nome' => 'hb20',
            'marca' => 'hyundai',
            'ano' => 2000
        ]);
    }
}
