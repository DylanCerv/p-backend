<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Companias;
use App\Models\Empleados;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        
        $user = new User();
        $user->email = "admin@admin.com";
        $user->password = "password";
        
        $user->save();


        Companias::factory(25)->create();

        Empleados::factory(25)->create();
    }
}
