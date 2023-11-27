<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::Create([
         'name'=>'Eman Elhelaly',
         'email'=>'eman@gmail.com',
         'password'=>Hash::make('password'),
         'phone_number'=>'0105555555',
       ]);
    }
}
