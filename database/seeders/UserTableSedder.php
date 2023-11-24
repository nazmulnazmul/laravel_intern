<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


use Illuminate\Database\Seeder;

class UserTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            
            [
                // admin
                'name' => "Admin",
                'username' => "admin",
                'email' => "admin@gmail.com",
                'password' => Hash::make("1234"),
                'role' => "admin",
                'status' => "active",
            ],

            
            [
                // super admin
                'name' => "Super Admin",
                'username' => "superadmin",
                'email' => "superadmin@gmail.com",
                'password' => Hash::make("1234"),
                'role' => "superadmin",
                'status' => "active",
            ],

            
             [
                 // user
                'name' => "User",
                'username' => "user",
                'email' => "user@gmail.com",
                'password' => Hash::make("1234"),
                'role' => "user",
                'status' => "active",
            ]
        ]);
    }
}
