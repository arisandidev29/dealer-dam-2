<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class permisionandroleSeed extends Seeder
{
    /**
     * Run the database seeds.
     */

    private $permission  = [
        'create_product',
        'delete_product',
        'update_product',
        'create_user',
        'update_user',
        'delete_user'
    ];
    public function run(): void
    {

        foreach($this->permission as $permission) {
           $perm =  Permission::create([
                'name' => $permission
            ]);
        }

        /*admin*/
        $role = Role::create(['name' => 'admin']);

        $role->givePermissionTo($this->permission); 


        $role = Role::create(['name' => 'editor']);  

        $role->givePermissionTo([
            'create_user',
            'update_user',
            'delete_user',
            // 'tes_user'
        ]);

    }
}
