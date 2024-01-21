<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user_id = '00000';
        $firstname = 'James';
        $lastname = 'Alingasa';
        $email = 'jamespagiwayan@example.com';
        $status = 'Active';
        DB::table('users')->insert ([
            [  
                'user_id' => $user_id,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'role' => 'Admin',
                'email' => $email,
                'status' => $status,
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
            ],
        ]);
        DB::table('courses')->insert ([
            [  
                'name' => 'BSIT',
                'description' => 'A Bachelor of Science in Information Technology (BSIT)',
                'duration' => 2,
                
            ],
            [  
              'name' => 'BSED-MATH',
              'description' => 'The Bachelor of Secondary Education Major in Mathematics (BSEd-Math)',
              'duration' => 3,
              
          ],
          [  
            'name' => 'BSED-SS',
            'description' => 'Bachelor in Secondary Education major in Social Studies (BSEd-SS) ',
            'duration' => 2,
            
        ],
        [  
          'name' => 'BEED',
          'description' => 'Bachelor of Elementary Education (BEED) ',
          'duration' => 3,
          
      ],
        ]);
        DB::table('subjects')->insert ([
            [  
                'name' => 'IT ELEC 102',
                'course_id' => 1,
                'start_date' => '2024/01/18',  
            ],
            [
                'name' => 'PC 114',
                'course_id' => 2,
                'start_date' => '2024/01/18',
            ],
            [
                'name' => 'PC 112',
                'course_id' => 3,
                'start_date' => '2024/01/18',
            ],
        ]);
       
        
    }
}
