<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{

    /**
     * List of applications to add.
     */
    private $permissions = [

        'role-list',
        'role-create',
        'role-edit',
        'role-update',
        'role-delete',

        'user-list',
        'user-create',
        'user-edit',
        'user-update',
        'user-delete',

        'category-list',
        'category-create',
        'category-edit',
        'category-delete',

        'post-list',
        'post-create',
        'post-edit',
        'post-delete',
    ];


    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
