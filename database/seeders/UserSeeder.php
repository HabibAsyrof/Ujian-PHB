<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'password' => Crypt::encryptString('admin#1234'),
            ]
        ];

        foreach($userData as $user) {
            $userModel = new User;
            $userModel->name = $user['name'];
            $userModel->username = $user['username'];
            $userModel->password = $user['password'];
            $userModel->save();
        }
    }
}