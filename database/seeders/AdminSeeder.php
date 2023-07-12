<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            'image' => 'None',
            'nama' => 'Super Admin',
            'role' => 'admin',
            'username' => 'admin1',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt("superadmin"),
            'no_hp' => '087733798090',
 
        ]);
        DB::table('users')->insert([
            'nama' => 'ndaru',
            'image' => 'None',
            'role' => 'user',
            'username' => 'ndaru24',
            'password' => bcrypt("ndaru123"),
            'no_hp' => '085647019630',
            'email' => 'ndaru123@gmail.com',
        ]);
        DB::table('users')->insert([
            'nama' => 'rian pratama',
            'image' => 'None',
            'role' => 'biro',
            'username' => 'rian123',
            'password' => bcrypt("rian123?"),
            'no_hp' => '085647019630',
            'email' => 'riansadboy@gmail.com',
        ]);
    }
}

