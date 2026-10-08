<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
{
        User::firstOrCreate(
            ['email' => env('ADMIN_EMAIL', 'admin@shahriargroup.com')],
            [
                'name' => 'Admin',
                'password' => Hash::make(env('ADMIN_PASSWORD', 'Admin@12345')),
            ]
        );
    }
}
