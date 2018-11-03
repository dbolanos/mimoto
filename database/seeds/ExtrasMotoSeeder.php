<?php

use Illuminate\Database\Seeder;
use App\Models\ExtraMoto;

class ExtrasMotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $extras_moto = [
            [
                'description' => 'Puños de Gel'
            ],
            [
                'description' => 'Asiento de Gel'
            ],
            [
                'description' => 'Puños Termicos'
            ],
            [
                'description' => 'Frenos ABS'
            ],
            [
                'description' => 'Alarma'
            ],
            [
                'description' => 'Luces Antiniebla'
            ],
            [
                'description' => 'Record de Agencia'
            ],
            [
                'description' => 'Control de Tracción'
            ],
            [
                'description' => 'Control de Velocidad'
            ],

        ];

        foreach($extras_moto as $extra_moto){
            ExtraMoto::create($extra_moto);
        }
    }
}
