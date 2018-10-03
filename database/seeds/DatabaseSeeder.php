<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PermissionsRolesSeeder::class);
        $this->call(ProvinceCantonDistrictSeeder::class);
        $this->call(MotorcycleBrandSeeder::class);
        $this->call(TypeMotorcycleSeeder::class);
    }
}
