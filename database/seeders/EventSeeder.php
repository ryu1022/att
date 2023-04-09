<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use DateTime;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('events')->insert([
            'group_id' => 1,
            'creator_id' => 1,
            'title' => '4月11日の練習',
            'body' => '場所は集会所で12時から始めます！',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        
        ]);
    }
}
