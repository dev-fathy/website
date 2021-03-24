<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        $super_admin = User::create([
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('secret'),
                    'remember_token' => str_random(60),
        ]);

        $super_admin->attachRole('super_admin');


        $moderator = User::create([
                    'name' => 'Moderator',
                    'email' => 'moderator@moderator.com',
                    'password' => bcrypt('password'),
                    'remember_token' => str_random(60),
        ]);

        $moderator->attachRole('moderator');
    }

}
