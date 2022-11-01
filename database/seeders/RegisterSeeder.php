<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Register;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Register::Create([

            'name' => 'admin',
            'role' => 'admin',
            'email' => 'leadorgin2021@gmail.com',
            'phone' =>  '1234567890',
            'password' => md5('admin#123'),
        ]);
    }
}
