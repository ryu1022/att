<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use DateTime;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('groups')->insert([
                'name' => 'かるたサークル',
                'leader_id' => 1,
                'body' => '週2回百人一首を練習しています！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
    }
}
