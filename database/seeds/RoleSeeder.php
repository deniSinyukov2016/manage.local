<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    public function run()
    {
        $roles = config('enums.roles');

        foreach ($roles as $role) {
            create(Role::class, ['name' => $role]);
        }
    }
}
