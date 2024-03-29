<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    public function run()
    {
        // Define role data
        $roles = [
            ['name' => 'Admin'],
            ['name' => 'Student'],
            ['name' => 'Teacher'],
        ];
        DB::table('roles')->insert($roles);
    }
}