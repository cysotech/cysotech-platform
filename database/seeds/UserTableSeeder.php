<?php

use App\Role;
use App\User;
use App\Permission;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dev_role = Role::where('slug','developer')->first();
        $client_role = Role::where('slug','client')->first();
        $manager_role = Role::where('slug', 'manager')->first();
        $dev_perm = Permission::where('slug','create-tasks')->first();
        $client_perm = Permission::where('slug','create-projects')->first();
        $manager_perm = Permission::where('slug','edit-users')->first();

        $developer = new User();
        $developer->name = 'Kingsley Muneer';
        $developer->email = 'kingsley@cysotech.com';
        $developer->password = bcrypt('secret123');
        $developer->save();
        $developer->roles()->attach($dev_role);
        $developer->permissions()->attach($dev_perm);
       
        $developer = new User();
        $developer->name = 'Tunde Muneer';
        $developer->email = 'tunde@cysotech.com';
        $developer->password = bcrypt('secret123');
        $developer->save();
        $developer->roles()->attach($client_role);
        $developer->permissions()->attach($client_perm);


        $manager = new User();
        $manager->name = 'Asad Butt';
        $manager->email = 'asad@cysotech.com';
        $manager->password = bcrypt('secret123');
        $manager->save();
        $manager->roles()->attach($manager_role);
        $manager->permissions()->attach($manager_perm);
    }
}
