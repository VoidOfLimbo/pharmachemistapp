<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $roles = [
            'DEV', 'OWNER',
            'GUEST',
            'ADMIN_HEAD', 'ADMIN',
            'SENIOR_DISPENSER', 'DISPENSER',
            'PICKER',
            'ENDORSER', 'BIODOSER',
            'PHARMACIST', 'CHECKER', 'FINAL_CHECKER',
            'SENIOR_DRIVER', 'DRIVER'
        ];

        foreach($roles as $role){
            $newrole = new Role();
            $newrole->title = $role;
            $newrole->save();
        }
    }
}
