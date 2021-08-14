<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        
        DB::table('zoho_tokens')->insert([
            'access_token' => '1000.3b235a944cca4a8bb214ba9ef863f6fb.88eae883b1dd45e51c66373273f415a8',
            'refresh_token' => '1000.45fa53355b296f5b373df3c5ec0f6c89.9af87fff866b0ba91017a95b05a03f5c',
        ]);
    }
}
