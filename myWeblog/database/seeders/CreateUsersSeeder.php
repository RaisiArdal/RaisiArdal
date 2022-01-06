<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin',
                'email'=>'Admin@localhost.com',
                'is_admin'=>'1',
                'password'=> bcrypt('Ardal565'),
            ],
            [
                'name'=>'user',
                'email'=>'User@localhost.com',
                'password'=> bcrypt('123456'),
            ],  [
                'name'=>'management',
                'email'=>'Management@localhost.com',
                'is_management'=>'1',
                'password'=> bcrypt('123456'),
            ],  [
                'name'=>'teacher',
                'email'=>'Teacher@localhost.com',
                'is_teacher'=>'1',
                'password'=> bcrypt('123456'),
            ],  [
                'name'=>'student',
                'email'=>'Student@localhost.com',
                'is_student'=>'1',
                'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
