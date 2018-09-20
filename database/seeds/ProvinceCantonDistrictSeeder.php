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
                'name' => 'Escazú',
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
                'name' => 'Tarrazú',
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
                'name' => 'Pérez Zeledón',
                'province_id' => 1,
            ],
            [
                'id' => 120,
                'name' => 'León Cortés Castro',
                'province_id' => 1,
            ],
            [
                'id' => 201,
                'name' => 'Alajuela',
                'province_id' => 2,
            ],
            [
                'id' => 202,
                'name' => 'San Ramón',
                'province_id' => 2,
            ],
            [
                'id' => 203,
                'name' => 'Grecia',
                'province_id' => 2,
            ],
            [
                'id' => 204,
                'name' => 'San Mateo',
                'province_id' => 2,
            ],
            [
                'id' => 205,
                'name' => 'Atenas',
                'province_id' => 2,
            ],
            [
                'id' => 206,
                'name' => 'Naranjo',
                'province_id' => 2,
            ],
            [
                'id' => 207,
                'name' => 'Palmares',
                'province_id' => 2,
            ],
            [
                'id' => 208,
                'name' => 'Poás',
                'province_id' => 2,
            ],
            [
                'id' => 209,
                'name' => 'Orotina',
                'province_id' => 2,
            ],
            [
                'id' => 210,
                'name' => 'San Carlos',
                'province_id' => 2,
            ],
            [
                'id' => 211,
                'name' => 'Zarcero',
                'province_id' => 2,
            ],
            [
                'id' => 212,
                'name' => 'Valverde Vega',
                'province_id' => 2,
            ],
            [
                'id' => 213,
                'name' => 'Upala',
                'province_id' => 2,
            ],
            [
                'id' => 214,
                'name' => 'Los Chiles',
                'province_id' => 2,
            ],
            [
                'id' => 215,
                'name' => 'Guatuso',
                'province_id' => 2,
            ],
            [
                'id' => 301,
                'name' => 'Cartago',
                'province_id' => 3
            ],
            [
                'id' => 302,
                'name' => 'Paraíso',
                'province_id' => 3
            ],
            [
                'id' => 303,
                'name' => 'La Unión',
                'province_id' => 3
            ],
            [
                'id' => 304,
                'name' => 'Jiménez',
                'province_id' => 3
            ],
            [
                'id' => 305,
                'name' => 'Turrialba',
                'province_id' => 3
            ],
            [
                'id' => 306,
                'name' => 'Alvarado',
                'province_id' => 3
            ],
            [
                'id' => 307,
                'name' => 'Oreamuno',
                'province_id' => 3
            ],
            [
                'id' => 308,
                'name' => 'El Guarco',
                'province_id' => 3
            ],
            [
                'id' => 401,
                'name' => 'Heredia',
                'province_id' => 4,
            ],
            [
                'id' => 402,
                'name' => 'Barva',
                'province_id' => 4
            ],
            [
                'id' => 403,
                'name' => 'Santo Domingo',
                'province_id' => 4
            ],
            [
                'id' => 404,
                'name' => 'Santa Bárbara',
                'province_id' => 4
            ],
            [
                'id' => 405,
                'name' => 'San Rafael',
                'province_id' => 4
            ],
            [
                'id' => 406,
                'name' => 'San Isidro',
                'province_id' => 4
            ],
            [
                'id' => 407,
                'name' => 'Belén',
                'province_id' => 4
            ],
            [
                'id' => 408,
                'name' => 'Flores',
                'province_id' => 4
            ],
            [
                'id' => 409,
                'name' => 'San Pablo',
                'province_id' => 4
            ],
            [
                'id' => 410,
                'name' => 'Sarapiquí',
                'province_id' => 4
            ],
            [
                'id' => 501,
                'name' => 'Liberia',
                'province_id' => 5,
            ],
            [
                'id' => 502,
                'name' => 'Nicoya',
                'province_id' => 5
            ],
            [
                'id' => 503,
                'name' => 'Santa Cruz',
                'province_id' => 5
            ],
            [
                'id' => 504,
                'name' => 'Bagaces',
                'province_id' => 5
            ],
            [
                'id' => 505,
                'name' => 'Carrillo',
                'province_id' => 5
            ],
            [
                'id' => 506,
                'name' => 'Cañas',
                'province_id' => 5
            ],
            [
                'id' => 507,
                'name' => 'Abangares',
                'province_id' => 5
            ],
            [
                'id' => 508,
                'name' => 'Tilarán',
                'province_id' => 5
            ],
            [
                'id' => 509,
                'name' => 'Nandayure',
                'province_id' => 5
            ],
            [
                'id' => 510,
                'name' => 'La Cruz',
                'province_id' => 5
            ],
            [
                'id' => 511,
                'name' => 'Hojancha',
                'province_id' => 5
            ],
            [
                'id' => 601,
                'name' => 'Puntarenas',
                'province_id' => 6
            ],
            [
                'id' => 602,
                'name' => 'Esparza',
                'province_id' => 6
            ],
            [
                'id' => 603,
                'name' => 'Buenos Aires',
                'province_id' => 6
            ],
            [
                'id' => 604,
                'name' => 'Montes de Oro',
                'province_id' => 6
            ],
            [
                'id' => 605,
                'name' => 'Osa',
                'province_id' => 6
            ],
            [
                'id' => 606,
                'name' => 'Quepos',
                'province_id' => 6
            ],
            [
                'id' => 607,
                'name' => 'Golfito',
                'province_id' => 6
            ],
            [
                'id' => 608,
                'name' => 'Coto Brus',
                'province_id' => 6
            ],
            [
                'id' => 609,
                'name' => 'Parrita',
                'province_id' => 6
            ],
            [
                'id' => 610,
                'name' => 'Corredores',
                'province_id' => 6
            ],
            [
                'id' => 611,
                'name' => 'Garabito',
                'province_id' => 6
            ],
            [
                'id' => 701,
                'name' => 'Limón',
                'province_id' => 7
            ],
            [
                'id' => 702,
                'name' => 'Pococí',
                'province_id' => 7
            ],
            [

                'id' => 703,
                'name' => 'Siquirres',
                'province_id' => 7
            ],
            [
                'id' => 704,
                'name' => 'Talamanca',
                'province_id' => 7
            ],
            [
                'id' => 705,
                'name' => 'Matina',
                'province_id' => 7
            ],
            [
                'id' => 706,
                'name' => 'Guácimo',
                'province_id' => 7
            ],


        ];

        foreach ($cantons as $canton) {
            Canton::create($canton);
        }


        $districts = [
            [
                'id' => 10101,
                'name' => 'Carmen',
                'canton_id' => 101
            ],
            [
                'id' => 10102,
                'name' => 'Merced',
                'canton_id' => 101
            ],
            [
                'id' => 10103,
                'name' => 'Hospital',
                'canton_id' => 101
            ],
            [
                'id' => 10104,
                'name' => 'Catedral',
                'canton_id' => 101
            ],
            [
                'id' => 10105,
                'name' => 'Zapote',
                'canton_id' => 101
            ],
            [
                'id' => 10106,
                'name' => 'San Francisco de Dos Ríos',
                'canton_id' => 101
            ],
            [
                'id' => 10107,
                'name' => 'Uruca',
                'canton_id' => 101
            ],
            [
                'id' => 10108,
                'name' => 'Mata Redonda',
                'canton_id' => 101
            ],
            [
                'id' => 10109,
                'name' => 'Pavas',
                'canton_id' => 101
            ],
            [
                'id' => 10110,
                'name' => 'Hatillo',
                'canton_id' => 101
            ],
            [
                'id' => 10111,
                'name' => 'San Sebastián',
                'canton_id' => 101
            ],
            [
                'id' => 10201,
                'name' => 'Escazú',
                'canton_id' => 102
            ],
            [
                'id' => 10202,
                'name' => 'San Antonio',
                'canton_id' => 102
            ],
            [
                'id' => 10203,
                'name' => 'San Rafael',
                'canton_id' => 102
            ],
            [
                'id' => 10301,
                'name' => 'Desamparados',
                'canton_id' => 103
            ],
            [
                'id' => 10302,
                'name' => 'San Miguel',
                'canton_id' => 103
            ],
            [
                'id' => 10303,
                'name' => 'San Juan de Dios',
                'canton_id' => 103
            ],
            [
                'id' => 10304,
                'name' => 'San Rafael Arriba',
                'canton_id' => 103
            ],
            [
                'id' => 10305,
                'name' => 'San Antonio',
                'canton_id' => 103
            ],
            [
                'id' => 10306,
                'name' => 'Frailes',
                'canton_id' => 103
            ],
            [
                'id' => 10307,
                'name' => 'Patarrá',
                'canton_id' => 103
            ],
            [
                'id' => 10308,
                'name' => 'San Cristóbal',
                'canton_id' => 103
            ],
            [
                'id' => 10309,
                'name' => 'Rosario',
                'canton_id' => 103
            ],
            [
                'id' => 10310,
                'name' => 'Damas',
                'canton_id' => 103
            ],
            [
                'id' => 10311,
                'name' => 'San Rafael Abajo',
                'canton_id' => 103
            ],
            [
                'id' => 10312,
                'name' => 'Gravilias',
                'canton_id' => 103
            ],
            [
                'id' => 10313,
                'name' => 'Los Guido',
                'canton_id' => 103
            ],
            [
                'id' => 10401,
                'name' => 'Santiago',
                'canton_id' => 104
            ],
            [
                'id' => 10402,
                'name' => 'Mercedes Sur',
                'canton_id' => 104
            ],
            [
                'id' => 10403,
                'name' => 'Barbacoas',
                'canton_id' => 104
            ],
            [
                'id' => 10404,
                'name' => 'Grifo Alto',
                'canton_id' => 104
            ],
            [
                'id' => 10405,
                'name' => 'San Rafael',
                'canton_id' => 104
            ],
            [
                'id' => 10406,
                'name' => 'Candelarita',
                'canton_id' => 104
            ],
            [
                'id' => 10407,
                'name' => 'Desamparaditos',
                'canton_id' => 104
            ],
            [
                'id' => 10408,
                'name' => 'San Antonio',
                'canton_id' => 104
            ],
            [
                'id' => 10409,
                'name' => 'Chires',
                'canton_id' => 104
            ],
            [
                'id' => 10501,
                'name' => 'San Marcos',
                'canton_id' => 105
            ],
            [
                'id' => 10502,
                'name' => 'San Lorenzo',
                'canton_id' => '105'
            ],
            [
                'id' => 10503,
                'name' => 'San Carlos',
                'canton_id' => 105
            ],
            [
                'id' => 10601,
                'name' => 'Aserrí',
                'canton_id' => 106
            ],
            [
                'id' => 10602,
                'name' => 'Tarbaca',
                'canton_id' => 106
            ],
            [
                'id' => 10603,
                'name' => 'Vuelta de Jorco',
                'canton_id' => 106
            ],
            [
                'id' => 10604,
                'name' => 'San Gabriel',
                'canton_id' => 106
            ],
            [
                'id' => 10605,
                'name' => 'Legua',
                'canton_id' => 106
            ],
            [
                'id' => 10606,
                'name' => 'Monterrey',
                'canton_id' => 106
            ],
            [
                'id' => 10607,
                'name' => 'Salitrillos',
                'canton_id' => 106
            ],
            [
                'id' => 10701,
                'name' => 'Colón',
                'canton_id' => 107
            ],
            [
                'id' => 10702,
                'name' => 'Guayabo',
                'canton_id' => 107
            ],
            [
                'id' => 10703,
                'name' => 'Tabarcia',
                'canton_id' => 107
            ],
            [
                'id' => 10704,
                'name' => 'Piedras Negras',
                'canton_id' => 107
            ],
            [
                'id' => 10705,
                'name' => 'Picagres',
                'canton_id' => 107
            ],
            [
                'id' => 10706,
                'name' => 'Jaris',
                'canton_id' => 107
            ],
            [
                'id' => 10801,
                'name' => 'Guadalupe',
                'canton_id' => 108
            ],
            [
                'id' => 10802,
                'name' => 'San Francisco',
                'canton_id' => 108
            ],
            [
                'id' => 10803,
                'name' => 'Calle Blancos',
                'canton_id' => 108
            ],
            [
                'id' => 10804,
                'name' => 'Mata de Plátano',
                'canton_id' => 108
            ],
            [
                'id' => 10805,
                'name' => 'Ipís',
                'canton_id' => 108
            ],
            [
                'id' => 10806,
                'name' => 'Rancho Redondo',
                'canton_id' => 108
            ],
            [
                'id' => 10807,
                'name' => 'Purral',
                'canton_id' => 108
            ],
            [
                'id' => 10901,
                'name' => 'Santa Ana',
                'canton_id' => 109
            ],
            [
                'id' => 10902,
                'name' => 'Salitral',
                'canton_id' => 109
            ],
            [
                'id' => 10903,
                'name' => 'Pozos',
                'canton_id' => 109
            ],
            [
                'id' => 10904,
                'name' => 'Uruca',
                'canton_id' => 109
            ],
            [
                'id' => 10905,
                'name' => 'Piedades',
                'canton_id' => 109
            ],
            [
                'id' => 10906,
                'name' => 'Brasil',
                'canton_id' => 109
            ],
            [
                'id' => 11001,
                'name' => 'Alajuelita',
                'canton_id' => 110
            ],
            [
                'id' => 11002,
                'name' => 'San Josecito',
                'canton_id' => 110
            ],
            [
                'id' => 11003,
                'name' => 'San Antonio',
                'canton_id' => 110
            ],
            [
                'id' => 11004,
                'name' => 'Concepción',
                'canton_id' => 110
            ],
            [
                'id' => 11005,
                'name' => 'San Felipe',
                'canton_id' => 110
            ],
            [
                'id' => 11101,
                'name' => 'San Isidro',
                'canton_id' => 111
            ],
            [
                'id' => 11102,
                'name' => 'San Rafael',
                'canton_id' => 111
            ],
            [
                'id' => 11103,
                'name' => 'Dulce Nombre de Jesús',
                'canton_id' => 111
            ],
            [
                'id' => 11104,
                'name' => 'Patalillo',
                'canton_id' => 111
            ],
            [
                'id' => 11105,
                'name' => 'Cascajal',
                'canton_id' => 111
            ],
            [
                'id' => 11201,
                'name' => 'San Ignacio',
                'canton_id' => 112
            ],
            [
                'id' => 11202,
                'name' => 'Guaitil',
                'canton_id' => 112
            ],
            [
                'id' => 11203,
                'name' => 'Palmichal',
                'canton_id' => 112
            ],
            [
                'id' => 11204,
                'name' => 'Cangrejal',
                'canton_id' => 112
            ],
            [
                'id' => 11205,
                'name' => 'Sabanillas',
                'canton_id' => 112
            ],
            [
                'id' => 11301,
                'name' => 'San Juan',
                'canton_id' => 113
            ],
            [
                'id' => 11302,
                'name' => 'Cinco Esquinas',
                'canton_id' => 113
            ],
            [
                'id' => 11303,
                'name' => 'Anselmo Llorente',
                'canton_id' => 113
            ],
            [
                'id' => 11304,
                'name' => 'León XIII',
                'canton_id' => 113
            ],
            [
                'id' => 11305,
                'name' => 'Colima',
                'canton_id' => 113
            ],
            [
                'id' => 11401,
                'name' => 'San Vicente',
                'canton_id' => 114
            ],
            [
                'id' => 11402,
                'name' => 'San Jerónimo',
                'canton_id' => 114
            ],
            [
                'id' => 11403,
                'name' => 'La Trinidad',
                'canton_id' => 114
            ],
            [
                'id' => 11501,
                'name' => 'San Pedro',
                'canton_id' => 115
            ],
            [
                'id' => 11502,
                'name' => 'Sabanilla',
                'canton_id' => 115
            ],
            [
                'id' => 11503,
                'name' => 'Mercedes',
                'canton_id' => 115
            ],
            [
                'id' => 11504,
                'name' => 'San Rafael',
                'canton_id' => 115
            ],
            [
                'id' => 11601,
                'name' => 'San Pablo',
                'canton_id' => 116
            ],
            [
                'id' => 11602,
                'name' => 'San Pedro',
                'canton_id' => 116
            ],
            [
                'id' => 11603,
                'name' => 'San Juan de Mata',
                'canton_id' => 116
            ],
            [
                'id' => 11604,
                'name' => 'San Luis',
                'canton_id' => 116
            ],
            [
                'id' => 11605,
                'name' => 'Carara',
                'canton_id' => 116
            ],
            [
                'id' => 11701,
                'name' => 'Santa María',
                'canton_id' => 117
            ],
            [
                'id' => 11702,
                'name' => 'Jardín',
                'canton_id' => 117
            ],
            [
                'id' => 11703,
                'name' => 'Copey',
                'canton_id' => 117
            ],
            [
                'id' => 11801,
                'name' => 'Curridabat',
                'canton_id' => 118
            ],
            [
                'id' => 11802,
                'name' => 'Granadilla',
                'canton_id' => 118
            ],
            [
                'id' => 11803,
                'name' => 'Sánchez',
                'canton_id' => 118
            ],
            [
                'id' => 11804,
                'name' => 'Tirrases',
                'canton_id' => 118
            ],
            [
                'id' => 11901,
                'name' => 'San Isidro de El General',
                'canton_id' => 119
            ],
            [
                'id' => 11902,
                'name' => 'General',
                'canton_id' => 119
            ],
            [
                'id' => 11903,
                'name' => 'Daniel Flores',
                'canton_id' => 119
            ],
            [
                'id' => 11904,
                'name' => 'Rivas',
                'canton_id' => 119
            ],
            [
                'id' => 11905,
                'name' => 'San Pedro',
                'canton_id' => 119
            ],
            [
                'id' => 11906,
                'name' => 'Platanares',
                'canton_id' => 119
            ],
            [
                'id' => 11907,
                'name' => 'Pejibaye',
                'canton_id' => 119
            ],
            [
                'id' => 11908,
                'name' => 'Cajón',
                'canton_id' => 119
            ],
            [
                'id' => 11909,
                'name' => 'Barú',
                'canton_id' => 119
            ],
            [
                'id' => 11910,
                'name' => 'Río Nuevo',
                'canton_id' => 119
            ],
            [
                'id' => 11911,
                'name' => 'Páramo',
                'canton_id' => 119
            ],
            [
                'id' => 12001,
                'name' => 'San Pablo',
                'canton_id' => 120
            ],
            [
                'id' => 12002,
                'name' => 'San Andrés',
                'canton_id' => 120
            ],
            [
                'id' => 12003,
                'name' => 'Llano Bonito',
                'canton_id' => 120
            ],
            [
                'id' => 12004,
                'name' => 'San Isidro',
                'canton_id' => 120
            ],
            [
                'id' => 12005,
                'name' => 'Santa Cruz',
                'canton_id' => 120
            ],
            [
                'id' => 12006,
                'name' => 'San Antonio',
                'canton_id' => 120
            ],

        ];

        foreach ($districts as $district) {
            District::create($district);
        }
    }
}
