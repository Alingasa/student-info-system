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
   
        DB::table('courses')->insert ([
            [  
                'name' => 'BSIT',
                'description' => 'A Bachelor of Science in Information Technology (BSIT)',
             
                
            ],
            [  
              'name' => 'BSED-MATH',
              'description' => 'The Bachelor of Secondary Education Major in Mathematics (BSEd-Math)',
            
              
          ],
          [  
            'name' => 'BSED-SS',
            'description' => 'Bachelor in Secondary Education major in Social Studies (BSEd-SS) ',
            
            
        ],
        [  
          'name' => 'BEED',
          'description' => 'Bachelor of Elementary Education (BEED) ',
         
        ]
       
        ]);
}
}