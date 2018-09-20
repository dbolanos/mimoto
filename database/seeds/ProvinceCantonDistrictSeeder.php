<?php

use Illuminate\Database\Seeder;
use App\Models\Province;
use App\Models\Canton;
use App\Models\District;

class ProvinceCantonDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $provinces = [
            [
                'name' => 'San José',
            ],
            [
                'name' => 'Alajuela',
            ],
            [
                'name' => 'Cartago',
            ],
            [
                'name' => 'Heredia',
            ],
            [
                'name' => 'Guanacaste',
            ],
            [
                'name' => 'Puntarenas',
            ],
            [
                'name' => 'Limón',
            ],
        ];

        foreach ($provinces as $province) {
            Province::create($province);
        }

        $cantons = [
            [
                'id' => 101,
                'name' => 'San José',
                'province_id' => 1,
            ],
            [
                'id' => 102,
                'name' => 'Escazu',
                'province_id' => 1,
            ],
            [
                'id' => 103,
                'name' => 'Desamparados',
                'province_id' => 1,
            ],
            [
                'id' => 104,
                'name' => 'Puriscal',
                'province_id' => 1,
            ],
            [
                'id' => 105,
                'name' => 'Tarraza',
                'province_id' => 1,
            ],

            [
                'id' => 106,
                'name' => 'Aserrí',
                'province_id' => 1,
            ],
            [
                'id' => 107,
                'name' => 'Mora',
                'province_id' => 1,
            ],
            [
                'id' => 108,
                'name' => 'Goicoechea',
                'province_id' => 1,
            ],
            [
                'id' => 109,
                'name' => 'Santa Ana',
                'province_id' => 1,
            ],
            [
                'id' => 110,
                'name' => 'Alajuelita',
                'province_id' => 1,
            ],
            [
                'id' => 111,
                'name' => 'Vázquez de Coronado',
                'province_id' => 1,
            ],
            [
                'id' => 112,
                'name' => 'Acosta',
                'province_id' => 1,
            ],
            [
                'id' => 113,
                'name' => 'Tibás',
                'province_id' => 1,
            ],
            [
                'id' => 114,
                'name' => 'Moravia',
                'province_id' => 1,
            ],
            [
                'id' => 115,
                'name' => 'Montes de Oca',
                'province_id' => 1,
            ],
            [
                'id' => 116,
                'name' => 'Turrubares',
                'province_id' => 1,
            ],
            [
                'id' => 117,
                'name' => 'Dota',
                'province_id' => 1,
            ],
            [
                'id' => 118,
                'name' => 'Curridabat',
                'province_id' => 1,
            ],
            [
                'id' => 119,
                'name' => 'Perez Zeledon',
                'province_id' => 1,
            ],
            [
                'id' => 120,
                'name' => 'Leon Corte Castro',
                'province_id' => 1,
            ]

        ];

        foreach ($provinces as $province) {
            Canton::create($province);
        }
    }
}
