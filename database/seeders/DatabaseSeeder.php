<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $crud_daftar_makanan = Permission::create(['name' => 'crud_daftar_makanan']);
        // $edit_resto = Permission::create(['name' => 'edit_resto']);
        $transaksi = Permission::create(['name' => 'transaksi']);

        // permission
        $role_superadmin = Role::create(['name' => 'Superadmin']);
        $role_superadmin->syncPermissions(['crud_daftar_makanan','transaksi']);

        $role_admin = Role::create(['name' => 'Admin']);
        $role_admin->syncPermissions(['transaksi']);

        $akun_superadmin = new User();
        $akun_superadmin->fill([
            'name' => 'superadmin',
            'username' => 'superadmin',
            'email' => 'superadmin@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("123456"), // password
            'remember_token' => Str::random(10),
        ]);
        $akun_superadmin->save();
        $akun_superadmin->assignRole($role_superadmin);
        $akun_admin = new User();
        $akun_admin->fill([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("123456"), // password
            'remember_token' => Str::random(10),
        ]);
        $akun_admin->save();
        $akun_admin->assignRole($role_admin);

        $this->call(DaftarMakananMinumanSeeder::class);
        $this->call(pelangganSeeder::class);
    }
}
