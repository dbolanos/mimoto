<?php

use Illuminate\Database\Seeder;
use App\Models\TypeAdMoto;

class TypeAdMotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $type_ad_motos = [

            [
                'description' => 'gratis',
                'price_colones' => 0,
                'price_dollars' => 0,
            ],
            [
                'description' => 'basico',
                'price_colones' => 2000,
                'price_dollars' => 4,
            ],
            [
                'description' => 'avanzado',
                'price_colones' => 4500,
                'price_dollars' => 10,
            ],
            [
                'description' => 'premium',
                'price_colones' => 10000,
                'price_dollars' => 20,
            ],
            [
                'description' => 'premium plus',
                'price_colones' => 14000,
                'price_dollars' => 25,
            ],

        ];

        foreach($type_ad_motos as $type_ad_moto){
            TypeAdMoto::create($type_ad_moto);
        }

    }
}
