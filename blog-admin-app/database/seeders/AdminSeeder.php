<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('isAdmin', 1)->first();

        if (! $admin)
        {
            \App\Models\User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@blog.com',
                'isAdmin' => true
            ]);
        }
    }
}
