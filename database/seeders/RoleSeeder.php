<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Karyawan;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin
        $role = Role::create([
            'nama' => 'admin'
        ]);
      
        $user = User::create([ 
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123123'),
            'role_id' => $role->id
        ]);

        // karyawan
        $role = Role::create([
            'nama' => 'karyawan'
        ]);

        $user = User::create([
            'name' => 'karyawan',
            'email' => 'karyawan@gmail.com',
            'password' => bcrypt('123123123'),
            'role_id' => $role->id
        ]);

        Karyawan::create([
            'user_id' => $user->id,
            'hp' => '088976068844',
            'alamat' => 'batutulis',
        ]);

        //konsumen
        $role = Role::create([
            'nama' => 'konsumen'
        ]);
        
    }
}
