<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Role::exists()) {
            return;
        }

        Role::insert(
            [
                ['role_name' => 'Banned user'],
                ['role_name' => 'Normal user'],
                ['role_name' => 'Admin'],
            ]
        );
    }
}
