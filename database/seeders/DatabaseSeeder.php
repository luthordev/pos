<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Laboratory::create([
            'name' => 'SUPERADMIN',
            'email' => '',
            'phone_number' => '',
            'address' => '',
            'active_until' => '4099/11/28',
        ]);

        \App\Models\Laboratory::create([
            'name' => 'Laboratorium 1',
            'email' => 'lab1@gmail.com',
            'phone_number' => '085156326072',
            'address' => 'Jalancagak, Subang',
            'active_until' => '2022/11/28',
        ]);

        \App\Models\Laboratory::create([
            'name' => 'Laboratorium 2',
            'email' => 'lab2@gmail.com',
            'phone_number' => '085156326072',
            'address' => 'Cikarang Utara, Bekasi',
            'active_until' => '2022/11/28',
        ]);

        \App\Models\User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@silg.com',
            'password' => Hash::make('password'),
            'phone_number' => '',
            'role' => 'superadmin',
            'id_laboratory' => '1',
        ]);

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@silg.com',
            'password' => Hash::make('password'),
            'phone_number' => '085155061010',
            'role' => 'admin',
            'id_laboratory' => '2',
        ]);

        \App\Models\User::create([
            'name' => 'Admin 2',
            'email' => 'admin2@silg.com',
            'password' => Hash::make('password'),
            'phone_number' => '085155061010',
            'role' => 'admin',
            'id_laboratory' => '3',
        ]);

        \App\Models\User::create([
            'name' => 'Tekniker',
            'email' => 'tekniker@silg.com',
            'password' => Hash::make('password'),
            'phone_number' => '08990671252',
            'role' => 'tekniker',
            'id_laboratory' => '2',
        ]);

        \App\Models\User::create([
            'name' => 'Tekniker 2',
            'email' => 'tekniker2@silg.com',
            'password' => Hash::make('password'),
            'phone_number' => '08990671252',
            'role' => 'tekniker',
            'id_laboratory' => '3',
        ]);

        \App\Models\User::create([
            'name' => 'Customer',
            'email' => 'customer@silg.com',
            'password' => Hash::make('password'),
            'phone_number' => '085324554690',
            'role' => 'customer',
            'id_laboratory' => '2',
        ]);

        \App\Models\User::create([
            'name' => 'Customer 2',
            'email' => 'customer2@silg.com',
            'password' => Hash::make('password'),
            'phone_number' => '085324554690',
            'role' => 'customer',
            'id_laboratory' => '3',
        ]);
    }
}
