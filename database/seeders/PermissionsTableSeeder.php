<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'description' => 'Cliente',
        ]);        
        DB::table('permissions')->insert([
            'description' => 'Administrador',
        ]);
    }
}
