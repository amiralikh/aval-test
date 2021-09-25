<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'sample user',
            'email' => 'info@sample.com',
            'mobile' => '09215880279',
            'password' => Hash::make('123456')
        ]);
    }
}
