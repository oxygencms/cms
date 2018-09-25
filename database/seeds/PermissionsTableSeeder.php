<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'manage_back_office', // can do everything!
        ];

        $resource_permissions = array_flatten([
            $this->resourcePermissions('link'),
            $this->resourcePermissions('menu'),
            $this->resourcePermissions('page'),
            $this->resourcePermissions('permission'),
            $this->resourcePermissions('phrase'),
            $this->resourcePermissions('role'),
            $this->resourcePermissions('user'),
            $this->resourcePermissions('block'),
        ]);

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        foreach ($resource_permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }

    /**
     * @param string $model
     *
     * @return array
     */
    private function resourcePermissions(string $model)
    {
        return [
            'manage_' . str_plural($model), // can do all them
            "see_" . str_plural($model), // index (back office)
            "create_$model", // create
            "update_$model", // update
            "delete_$model", // delete
        ];
    }
}
