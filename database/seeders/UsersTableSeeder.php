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
            'email' => 'admin@seventh.com',
            'phone' => '999199555',
            'address' => 'Florianópolis que me aguarde!',
            'cpf' => '01745738045',
            'permission_id' => 2,
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name' => 'Charles Xavier',
            'email' => 'professorx@seventh.com',
            'phone' => '999199555',
            'address' => 'Escola para Jovens Super Dotados, sn',
            'cpf' => '63395667073',
            'permission_id' => 2,
            'password' => bcrypt('senha123')
        ]);
        DB::table('users')->insert([
            'name' => 'Hermione Granger',
            'email' => 'hermione@seventh.com',
            'phone' => '991119111',
            'address' => 'Largo Grimmauld, 12, London',
            'cpf' => '06120811095',
            'permission_id' => 1,
            'password' => bcrypt('senha123')
        ]);
        DB::table('users')->insert([
            'name' => 'Harry Potter',
            'email' => 'harry@seventh.com',
            'phone' => '999221443',
            'address' => 'R dos Alfeneiros, n 4, Curitiba - PR',
            'cpf' => '10438176030',
            'permission_id' => 1,
            'password' => bcrypt('senha123')
        ]);
        DB::table('users')->insert([
            'name' => 'Genos',
            'email' => 'genos@seventh.com',
            'phone' => '991119111',
            'address' => 'Rua dos Ciborgues, n 25, China',
            'cpf' => '94255452008',
            'permission_id' => 1,
            'password' => bcrypt('senha123')
        ]);
        DB::table('users')->insert([
            'name' => 'Mario Bros',
            'email' => 'mario@seventh.com',
            'phone' => '991522565',
            'address' => 'R dos Encanadores, n 9, Juazeiro do Norte - MG',
            'cpf' => '30683905082',
            'permission_id' => 1,
            'password' => bcrypt('senha123')
        ]);
        DB::table('users')->insert([
            'name' => 'Saitama',
            'email' => 'saitama@seventh.com',
            'phone' => '991689898',
            'address' => 'R Saitama, n 1, São José dos Campos - SP',
            'cpf' => '17339042040',
            'permission_id' => 1,
            'password' => bcrypt('senha123')
        ]);
    }
}
