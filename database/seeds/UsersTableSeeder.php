<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin_eiffage')->first();
        $authorRole = Role::where('name', 'utilisateur_eiffage')->first();
        $userRole = Role::where('name', 'utilisateur_green_perf')->first();

        $admin = User::create([
            'name' => 'Admin Eiffage',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin')
        ]);

        // $author = User::create([
        //     'name' => 'User Eiffage',
        //     'email' => 'author@author.com',
        //     'password' => Hash::make('authorauthor')
        // ]);

        // $user = User::create([
        //     'name' => 'User Green-Perf',
        //     'email' => 'user@user.com',
        //     'password' => Hash::make('useruser')
        // ]);

        $admin->roles()->attach($adminRole);
        // $author->roles()->attach($authorRole);
        // $user->roles()->attach($user);
    }
}
