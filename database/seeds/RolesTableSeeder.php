<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_and_permissions = collect([
            [
                'role' => 'administrator',
                'permissions' => [
                    'manage_back_office',
                ],
            ],
            [
                'role' => 'observer',
                'permissions' => [
                    'see_links',
                    'see_menus',
                    'see_pages',
                    'see_permissions',
                    'see_phrases',
                    'see_blocks',
                    'see_roles',
                    'see_users',
                ],
            ],
        ]);

        $roles_and_permissions->each(function ($item) {
            Role::create(['name' => $item['role']])
                ->givePermissionTo($item['permissions']);
        });
    }
}
