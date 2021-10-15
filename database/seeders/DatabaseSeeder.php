<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Danya',
            'email' => 'danilshahov@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin'
        ]);
        // \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create();
    }
}
