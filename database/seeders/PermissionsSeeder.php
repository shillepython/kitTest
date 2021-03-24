<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit test']);
        Permission::create(['name' => 'create test']);
        Permission::create(['name' => 'delete test']);

        Permission::create(['name' => 'edit role-user']);

        // create roles and assign existing permissions
        Role::create(['name' => 'user']);

        $role1 = Role::create(['name' => 'teacher']);
        $role1->givePermissionTo('create test');
        $role1->givePermissionTo('delete test');
        $role1->givePermissionTo('edit test');

        $roleAdmni = Role::create(['name' => 'admin']);
        $roleAdmni->givePermissionTo(Permission::all());

        $user = User::factory()->create();
        $user->assignRole('admin');
    }
}
