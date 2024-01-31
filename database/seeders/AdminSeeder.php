<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
      public function run(): void {
       DB::table('users')->insert ([
            [  
        'user_id' => '00000',
        'firstname' => 'James',
        'lastname' => 'Alingasa',
        'role' => 'Admin',
        'email' => 'jamespagiwayan@example.com',
        'status' => 'Active',
        'password' => Hash::make('jamesalingasa'),
        'remember_token' => NULL,
        'created_at' => now(),
        'updated_at' => now(),
         ],
          [  
        'user_id' => '11111',
        'firstname' => 'Rico',
        'lastname' => 'Inguito',
        'role' => 'Admin',
        'email' => 'ricoinguito@gmail.com',
        'status' => 'Active',
        'password' => Hash::make('ricoinguito'),
        'remember_token' => NULL,
        'created_at' => now(),
        'updated_at' => now(),
          ] ,
        ]);
    }
}