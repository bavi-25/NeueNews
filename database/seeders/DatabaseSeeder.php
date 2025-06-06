<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $roles = [
            'administrator',
            'writer',
            'reviewer'
        ];
        foreach ($roles as $role) {
            \Spatie\Permission\Models\Role::create(['name' => $role, 'guard_name' => 'web']);
        }

        $administrator = User::factory()->create([
            'name' => 'Administrator',
            'email' => 'administrator@neuenews.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);
        $administrator->assignRole('administrator');

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
