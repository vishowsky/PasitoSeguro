<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'usu_rut' =>'123',    
        'usu_nombre' => 'admin',
        'usu_apellido'=> 'istrador',
        'usu_email' => 'admin@admin',
        'usu_password' => Hash::make('123')

      ]);

      
    }
}
