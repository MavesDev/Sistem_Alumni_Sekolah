<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Male',
            'level' => 'admin',
            'email' => 'adminMale@Gmail.com',
            'password' => bcrypt('adminmale478'),
            'alumni_code' => '88888888',
            'alumni_generation' => '10',
            'alumni_course' => 'Tata Usaha',
            'alumni_last_year' => '2000',
            'alumni_domisil' => 'Bandung',
            'alumni_job' => 'Guru',
            'alumni_last_year' => '2000',
            'alumni_image' => 'unknown.png',
            'remember_token' => Str::random(60),
        ]);
    }
}
