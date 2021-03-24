<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        $super_admin = Role::create([
                    'name' => 'super_admin',
                    'display_name' => 'super admin',
                    'description' => 'full access on website',
        ]);

        $moderator= Role::create([
                    'name' => 'moderator',
                    'display_name' => 'moderator',
                    'description' => 'control on user panel & can see admin panel',
        ]);

        $user = Role::create([
                    'name' => 'user',
                    'display_name' => 'user',
                    'description' => 'see user pannel only',
        ]);
    }

}
