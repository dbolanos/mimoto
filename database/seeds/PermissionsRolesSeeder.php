<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class PermissionsRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [
            [
                'name'          => 'admin-system',
                'display_name'  => 'Administrador',
                'description'   => 'Acceso total a todas las funciones'
            ],
            [
                'name'          => 'report',
                'display_name'  => 'Reportes',
                'description'   => 'Gestion de Reportes'
            ],
            [
                'name'          => 'supervisor',
                'display_name'  => 'Supervisor',
                'description'   => 'Gestion de procesos en el Sistema'
            ],
            [
                'name'          => 'admin_usuarios',
                'display_name'  => 'Administrador de Usuario',
                'description'   => 'Gestion de usuarios'
            ],
            [
                'name'          => 'cambio_contrasena',
                'display_name'  => 'Cambio de Contraseña',
                'description'   => 'Cambiar Contraseña'
            ],
        ];

        //Crear el objeto en la base de datos
        foreach($permissions as $permission){
            Permission::create($permission);
        }

        $roles =[
            [
                'name'          => 'admin',
                'display_name'  => 'Administrador',
                'description'   => 'Total Dominio'
            ],
            [
                'name'          => 'supervisor_1',
                'display_name'  => 'Administrador nivel 1',
                'description'   => 'Administra y Supervisa '
            ],
            [
                'name'          => 'supervisor_2',
                'display_name'  => 'Administrador Nivel 2',
                'description'   => 'Administra y Supervisa las Herramientas del Sistema'
            ],
            [
                'name'          => 'cliente',
                'display_name'  => 'Cliente',
                'description'   => 'Cliente de MiMoto'
            ],

        ];

        //Crear el objeto en la base de datos
        foreach($roles as $role){
            Role::create($role);
        }

        //Asignar todos los permisos al rol de Administrador General
        $permissions_administrator  = Permission::all();
        $rol_administrator          = Role::find(1);
        foreach($permissions_administrator as $permission_administrator){
            $rol_administrator->attachPermission($permission_administrator);
        }

        //Asignar los permisos respectivos al rol de Supervisor 1
        $supervisor_1               = Role::find(2);
        $supervisor_1->attachPermission(Permission::find(2));
        $supervisor_1->attachPermission(Permission::find(3));

        $supervisor_2               = Role::find(3);
        $supervisor_2->attachPermission(Permission::find(2));
        $supervisor_2->attachPermission(Permission::find(3));
        $supervisor_2->attachPermission(Permission::find(4));
        $supervisor_2->attachPermission(Permission::find(5));

        $rol_cliente                = Role::find(4);
        $rol_cliente->attachPermission(Permission::find(5));


    }
}
