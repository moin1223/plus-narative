<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());
        $contentManager = Role::create(['name' => 'Content Manager
        
        ']);
        $contentManager->givePermissionTo(['View Admin Dashboard']);

    }


}