<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        /** @var User $admin */
        $admin = create(User::class, [
            'first_name' => 'Denis',
            'last_name' => 'Sinyukov',
            'username' => 'DnSinyukov',
            'password' => bcrypt('111111'),
            'email' => 'jon@doe.com',
        ]);
        $admin->roles()->attach([1,2]);


        $user = create(User::class, [
            'first_name' => 'Tom',
            'last_name' => 'Bredly',
            'username' => 'Tom111',
            'password' => bcrypt('111111'),
            'email' => 'tom@doe.com',
        ]);

        $user->roles()->attach(2);
    }
}
