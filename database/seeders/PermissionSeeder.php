<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Utils\PermissionsConst;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Dashboard
        Permission::updateOrCreate(
            ['id' => PermissionsConst::DASHBOARD],
            [
                'name' => 'dashboard.view',
                'description' => 'Ver Dashboard',
            ]
        );


        //Usuarios
        Permission::updateOrCreate(
            ['id' => PermissionsConst::LIST_USERS],
            [
                'name' => 'users.view',
                'description' => 'Ver usuarios',
            ]
        );
        Permission::updateOrCreate(
            ['id' => PermissionsConst::CREATE_USER],
            [
                'name' => 'users.create',
                'description' => 'Crear usuarios',
            ]
        );
        Permission::updateOrCreate(
            ['id' => PermissionsConst::EDIT_USER],
            [
                'name' => 'users.edit',
                'description' => 'Editar usuarios',
            ]
        );
        Permission::updateOrCreate(
            ['id' => PermissionsConst::TOGGLE_USER_ACTIVE],
            [
                'name' => 'users.active',
                'description' => 'Activar/Desact usuarios',
            ]
        );

        //Roles
        Permission::updateOrCreate(
            ['id' => PermissionsConst::LIST_ROLES],
            [
                'name' => 'roles.view',
                'description' => 'Ver roles',
            ]
        );
        Permission::updateOrCreate(
            ['id' => PermissionsConst::CREATE_ROLES],
            [
                'name' => 'roles.create',
                'description' => 'Crear roles',
            ]
        );
        Permission::updateOrCreate(
            ['id' => PermissionsConst::EDIT_ROLES],
            [
                'name' => 'roles.edit',
                'description' => 'Editar roles',
            ]
        );
    


    }
}
