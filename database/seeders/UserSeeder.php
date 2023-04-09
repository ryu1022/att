<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use DateTime;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('users')->insert([
                'email' => 'ryunosuke@gmail.com',
                'password' => Hash::make('password'),
                'name' => '太田隆之亮',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            
            ]);
            
    
        
    }
}
