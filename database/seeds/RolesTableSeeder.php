<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::truncate();
        Role::create(['name' => 'admin_eiffage']);
        Role::create(['name' => 'utilisateur_eiffage']);
        Role::create(['name' => 'utilisateur_green_perf']);
    }
}
