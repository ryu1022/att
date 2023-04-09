<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Controllers\DateTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            GroupSeeder::class,
            EventSeeder::class,
            
            
        ]);
        
        
    }
}
