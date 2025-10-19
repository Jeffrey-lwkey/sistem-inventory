<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        $admin = User::firstOrCreate(
            ['email' => config('app.seed_admin_email', env('SEED_ADMIN_EMAIL', 'admin@hotmail.com'))],
            [
                'name' => 'Administrator',
                'password' => Hash::make(config('app.seed_admin_password', env('SEED_ADMIN_PASSWORD', 'password'))),
            ]
        );
        $admin->syncRoles(['admin']);

        // Staff
        $staff = User::firstOrCreate(
            ['email' => config('app.seed_staff_email', env('SEED_STAFF_EMAIL', 'staff@hotmail.com'))],
            [
                'name' => 'Staff',
                'password' => Hash::make(config('app.seed_staff_password', env('SEED_STAFF_PASSWORD', 'password'))),
            ]
        );
        $staff->syncRoles(['staff']);
    }
}
