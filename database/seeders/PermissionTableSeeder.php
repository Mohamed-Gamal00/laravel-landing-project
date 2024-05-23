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

        'roles',
        'role-create',
        'role-edit',
        'role-update',
        'role-delete',

        'users',
        'user-create',
        'user-edit',
        'user-delete',

        'categories',
        'category-create',
        'category-edit',
        'category-delete',

        'posts',
        'post-create',
        'post-edit',
        'post-delete',

        'projects',
        'project-create',
        'project-edit',
        'project-delete',

        'contacts',

        'settings',
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
