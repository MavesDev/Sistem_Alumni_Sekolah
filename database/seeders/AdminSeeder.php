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
            'alumni_code' => '--------',
            'alumni_generation' => '-',
            'alumni_course' => '-',
            'alumni_last_year' => '-',
            'alumni_domisil' => '-',
            'alumni_job' => 'Admin',
            'alumni_last_year' => '-',
            'alumni_image' => 'unknown.png',
            'remember_token' => Str::random(60),
        ]);
    }
}
