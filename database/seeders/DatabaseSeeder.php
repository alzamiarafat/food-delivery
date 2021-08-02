<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $pass = 789456123;
        User::create([
            'username' => 'System Admin',
            'email' => 'system.admin@mailinator.com',
            'domains' => 'system,developer,dashboard,operator,support,manager',
            'type' => 'dashboard',
            'role' => 'system',
            'weight' => 99.99,
            'password' => bcrypt($pass),
        ]);

        User::create([
            'username' => 'Support Admin',
            'email' => 'support.admin@mailinator.com',
            'domains' => 'support',
            'type' => 'support',
            'role' => 'admin',
            'weight' => 89.99,
            'password' => bcrypt($pass),
        ]);

        User::create([
            'username' => 'Developer',
            'email' => 'developer@mailinator.com',
            'domains' => 'developer,dashboard,manager',
            'type' => 'dashboard',
            'role' => 'developer',
            'weight' => 99.99,
            'password' => bcrypt($pass),
        ]);

        User::create([
            'username' => 'Admin',
            'email' => 'admin@mailinator.com',
            'domains' => 'dashboard,manager',
            'type' => 'dashboard',
            'role' => 'admin',
            'weight' => 99.99,
            'password' => bcrypt($pass),
        ]);

        User::create([
            'username' => 'Account',
            'email' => 'account@mailinator.com',
            'domains' => 'account',
            'type' => 'account',
            'role' => 'account',
            'weight' => 99.99,
            'password' => bcrypt($pass),
        ]);

        User::create([
            'username' => 'Shop Manager',
            'email' => 'shop.manager@mailinator.com',
            'domains' => 'manager',
            'type' => 'manager',
            'role' => 'manager',
            'weight' => 49.99,
            'password' => bcrypt($pass),
        ]);

        User::create([
            'username' => 'Data Entry',
            'email' => 'data.entry@mailinator.com',
            'domains' => 'operator',
            'type' => 'operator',
            'role' => 'operator',
            'weight' => 39.99,
            'password' => bcrypt($pass),
        ]);


        User::create([
            'username' => 'General Client',
            'email' => 'user@mailinator.com',
            'role' => 'user',
            'type' => 'user',
            'weight' => 9.99,
            'password' => bcrypt($pass),
        ]);

        Profile::create([
            'user_id' => '1',
        ]);
        Profile::create([
            'user_id' => '2',
        ]);
        Profile::create([
            'user_id' => '3',
        ]);
        Profile::create([
            'user_id' => '4',
        ]);
        Profile::create([
            'user_id' => '5',
        ]);
        Profile::create([
            'user_id' => '6',
        ]);
        Profile::create([
            'user_id' => '7',
        ]);
        Profile::create([
            'user_id' => '8',
        ]);
    }
}
