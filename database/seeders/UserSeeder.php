<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = User::create([
            'name'      => 'Superadmin',
            'username'  => 'superadmin',
            'status'    => 'Aktif',
            'role'      => 'Superadmin',
            'password'  => Hash::make('12345678')
        ]);

        $sales = User::create([
            'name'      => 'Sales',
            'username'  => 'sales',
            'status'    => 'Aktif',
            'role'      => 'Sales',
            'password'  => Hash::make('12345678')
        ]);

        $finance = User::create([
            'name'      => 'Finance',
            'username'  => 'finance',
            'status'    => 'Aktif',
            'role'      => 'Finance',
            'password'  => Hash::make('12345678')
        ]);

        $gudang = User::create([
            'name'      => 'Gudang',
            'username'  => 'gudang',
            'status'    => 'Aktif',
            'role'      => 'Gudang',
            'password'  => Hash::make('12345678')
        ]);

        $teknisi = User::create([
            'name'      => 'Teknisi',
            'username'  => 'teknisi',
            'status'    => 'Aktif',
            'role'      => 'Teknisi',
            'password'  => Hash::make('12345678')
        ]);

    }
}
