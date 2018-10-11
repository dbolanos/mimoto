<?php

use Illuminate\Database\Seeder;
use App\Models\TypeFuel;

class TypeFuelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $types_fuel = [
            [
                'description' => 'Gasolina'
            ],
            [
                'description' => 'Electrico'
            ],
        ];

        foreach($types_fuel as $type_fuel){
            TypeFuel::create($type_fuel);
        }


    }
}
