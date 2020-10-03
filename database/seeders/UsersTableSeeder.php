<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@user.com',
            'phone' => '999199555',
            'address' => 'Florianópolis que me aguarde!',
            'cpf' => '01745738045',
            'permission' => 2,
            'password' => bcrypt('senha123')
        ]);
        DB::table('users')->insert([
            'name' => 'Charles Xavier',
            'email' => 'professorx@user.com',
            'phone' => '999199555',
            'address' => 'Escola para Jovens Super Dotados, sn',
            'cpf' => '63395667073',
            'permission' => 2,
            'password' => bcrypt('senha123')
        ]);
        DB::table('users')->insert([
            'name' => 'Harry Potter',
            'email' => 'harry@user.com',
            'phone' => '999221443',
            'address' => 'R dos Alfeneiros, n 4, Curitiba - PR',
            'cpf' => '10438176030',
            'permission' => 1,
            'password' => bcrypt('senha123')
        ]);
        DB::table('users')->insert([
            'name' => 'Genos',
            'email' => 'genos@seventh.com',
            'phone' => '991119111',
            'address' => 'Rua dos Ciborgues, n 25, China',
            'cpf' => '94255452008',
            'permission' => 1,
            'password' => bcrypt('senha123')
        ]);
        DB::table('users')->insert([
            'name' => 'Mario Bros',
            'email' => 'mario@user.com',
            'phone' => '991522565',
            'address' => 'R dos Encanadores, n 9, Juazeiro do Norte - MG',
            'cpf' => '30683905082',
            'permission' => 1,
            'password' => bcrypt('senha123')
        ]);
        DB::table('users')->insert([
            'name' => 'Saitama',
            'email' => 'saitama@user.com',
            'phone' => '991689898',
            'address' => 'R Saitama, n 1, São José dos Campos - SP',
            'cpf' => '17339042040',
            'permission' => 2,
            'password' => bcrypt('senha123')
        ]);
    }
}
