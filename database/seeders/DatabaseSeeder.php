<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'user']);
        Permission::create(['name'=>'create']);
        Permission::create(['name'=>'read']);
        Permission::create(['name'=>'update']);
        Permission::create(['name'=>'delete']);
        Role::findByName('admin')->givePermissionTo('create','read','update','delete');
        Role::findByName('user')->givePermissionTo('create','read');

        $accounts = [
            ['name'=>'Admin','email'=>'admin@example.com','password'=>'12345678','role'=>'admin'],
            ['name'=>'User','email'=>'user@example.com','password'=>'12345678','role'=>'user']
            
        ];
        foreach ($accounts as $account){
            User::create([
                'name' => $account['name'],
                'email' => $account['email'],
                'password' => Hash::make($account['password'])
            ])->assignRole($account['role']);   
        }
    }
}
