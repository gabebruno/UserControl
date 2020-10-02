<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logs')->insert([
            'user_id' => '1',
            'login' => 'admin@seventh.com',
            'description' => 'Realizado criação e implantação de API de cadastro e controle de usuários da Seventh.',
        ]);
    }
}
