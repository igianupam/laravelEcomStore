<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'admin',
            'editor',
            'user',
        ];

        // Create roles
        foreach ($roles as $role) {
            Role::create(['name' => $role, 'guard_name' => 'web']);
        }
    }
}
