<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'              => 'Jhon Doe',
                'email'             => 'jhon@mail.com',
                'password'          => Hash::make('admin@123'),
                'remember_token'    => NULL,
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s'),
            ],
            [
                'name'              => 'Jane Doe',
                'email'             => 'jane@mail.com',
                'password'          => Hash::make('admin@123'),
                'remember_token'    => NULL,
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s'),
            ]
        ];

        User::insert($users);
    }
}
