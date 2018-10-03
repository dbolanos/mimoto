<?php

use Illuminate\Database\Seeder;
use App\Models\TypeMotorcycle;

class TypeMotorcycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $type_motorcycles = [
            [
                'description' => 'Doble Proposito (Trail)'
            ],
            [
                'description' => 'Enduro'
            ],
            [
                'description' => 'MotoCross'
            ],
            [
                'description' => 'Naked'
            ],
            [
                'description' => 'Pandillera (Chopper)'
            ],
            [
                'description' => 'Pit Bike (Moto pequeña)'
            ],
            [
                'description' => 'Scooter'
            ],
            [
                'description' => 'Sport'
            ],
            [
                'description' => 'Super Bike (Deportiva)'
            ],
            [
                'description' => 'Turismo (Touring)'
            ],
            [
                'description' => 'Trial'
            ],
        ];

        foreach($type_motorcycles as $type_motorcycle){
            TypeMotorcycle::create($type_motorcycle);
        }
    }
}
