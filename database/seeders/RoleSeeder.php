<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $mitraRole = Role::firstOrCreate(['name' => 'mitra']);
        $customerRole = Role::firstOrCreate(['name' => 'customer']);

        // Admin
        $admin = User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'WCoffee',
                'phone' => '081234567890',
                'password' => Hash::make('password'),
            ]
        );
        $admin->assignRole($adminRole);

        // Mitra
        $mitra = User::updateOrCreate(
            ['email' => 'mitra@example.com'],
            [
                'name' => 'Mitra User',
                'phone' => '082345678901',
                'password' => Hash::make('password'),
            ]
        );
        $mitra->assignRole($mitraRole);

        // Customer
        $customer = User::updateOrCreate(
            ['email' => 'customer@example.com'],
            [
                'name' => 'Customer User',
                'phone' => '083456789012',
                'password' => Hash::make('password'),
            ]
        );
        $customer->assignRole($customerRole);
    }
}
