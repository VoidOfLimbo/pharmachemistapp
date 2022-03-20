<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = new User();
        $superadmin->id = 1;
        $superadmin->name = 'Dev';
        $superadmin->email = 'dev@dev.com';
        $superadmin->email_verified_at = now();
        $superadmin->password = bcrypt('developer');
        $superadmin->remember_token = null;
        $superadmin->save();

        $superadmin->roles()->attach(Role::SUPER_ADMIN);
    }
}
