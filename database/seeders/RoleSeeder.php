<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(
            ['role_name' => 'Ban user'],
            ['role_name' => 'Normal user'],
            ['role_name' => 'Admin'],
        );
    }
}
