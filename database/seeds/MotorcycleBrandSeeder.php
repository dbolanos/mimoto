<?php

use Illuminate\Database\Seeder;
use App\Models\MotorcycleBrand;

class MotorcycleBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $motorcycles_brands = [
            [
                'description' => 'AKT '
            ],

            [
                'description' => 'Aprilia'
            ],

            [
                'description' => 'Argo'
            ],

            [
                'description' => 'Artic Cat'
            ],

            [
                'description' => 'BMW'
            ],

            [
                'description' => 'BSA'
            ],

            [
                'description' => 'Bajaj'
            ],

            [
                'description' => 'Benelli'
            ],
            [
                'description' => 'Bultaco'
            ],
            [
                'description' => 'Cagiva'
            ],

            [
                'description' => 'Cobra'
            ],

            [
                'description' => 'Daelim'
            ],
            [
                'description' => 'Ducati'
            ],

            [
                'description' => 'Electro Bike'
            ],

            [
                'description' => 'Formula'
            ],

            [
                'description' => 'Freedom'
            ],

            [
                'description' => 'Gas Gas'
            ],

            [
                'description' => 'Geeley'
            ],

            [
                'description' => 'Genesis'
            ],

            [
                'description' => 'HISUN'
            ],

            [
                'description' => 'Haojue'
            ],

            [
                'description' => 'Harley Davidson'
            ],

            [
                'description' => 'Hero'
            ],

            [
                'description' => 'Honda'
            ],

            [
                'description' => 'Husaberg '
            ],

            [
                'description' => 'Husqvarna '
            ],

            [
                'description' => 'Hyosung'
            ],

            [
                'description' => 'Indian'
            ],

            [
                'description' => 'Jawa'
            ],

            [
                'description' => 'Jialing'
            ],

            [
                'description' => 'John Deere'
            ],

            [
                'description' => 'KTM'
            ],

            [
                'description' => 'Katana'
            ],

            [
                'description' => 'Kawasaki'
            ],

            [
                'description' => 'Keeway'
            ],

            [
                'description' => 'Kinetic'
            ],

            [
                'description' => 'Kymco'
            ],

            [
                'description' => 'LML'
            ],

            [
                'description' => 'Lifan'
            ],

            [
                'description' => 'Loncin'
            ],

            [
                'description' => 'MV Agusta'
            ],

            [
                'description' => 'MZ'
            ],

            [
                'description' => 'Montesa'
            ],

            [
                'description' => 'Moto Cruiser'
            ],

            [
                'description' => 'Moto Guzzi'
            ],

            [
                'description' => 'Moto Tek'
            ],

            [
                'description' => 'Motoped'
            ],

            [
                'description' => 'Norton'
            ],

            [
                'description' => 'Osaka'
            ],

            [
                'description' => 'Ossa'
            ],

            [
                'description' => 'Piaggio'
            ],

            [
                'description' => 'Pitster'
            ],

            [
                'description' => 'Polaris'
            ],

            [
                'description' => 'Qingqui'
            ],

            [
                'description' => 'Rokk'
            ],

            [
                'description' => 'SSR'
            ],

            [
                'description' => 'SWM'
            ],

            [
                'description' => 'SYM'
            ],

            [
                'description' => 'Sang Yang'
            ],

            [
                'description' => 'Senke'
            ],

            [
                'description' => 'Serpento'
            ],

            [
                'description' => 'Sherco'
            ],

            [
                'description' => 'Sinski'
            ],

            [
                'description' => 'Spazzio'
            ],

            [
                'description' => 'Sukida'
            ],

            [
                'description' => 'Suzuki'
            ],

            [
                'description' => 'TGB'
            ],

            [
                'description' => 'TVS'
            ],

            [
                'description' => 'Triumph'
            ],

            [
                'description' => 'UM'
            ],

            [
                'description' => 'URAL'
            ],

            [
                'description' => 'Unico'
            ],

            [
                'description' => 'Vento'
            ],

            [
                'description' => 'Vespa'
            ],

            [
                'description' => 'Victory '
            ],

            [
                'description' => 'Yamaha '
            ],

            [
                'description' => 'Yumbo'
            ],

            [
                'description' => 'Zongshen'
            ],

            [
                'description' => 'Zundapp'
            ],

        ];

        foreach($motorcycles_brands as $motorcycles_brand){
            MotorcycleBrand::create($motorcycles_brand);
        }
    }
}
