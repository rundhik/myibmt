<?php

use Illuminate\Database\Seeder;
use MyIBMT\Models\Permission;

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
            [
                'name' => 'create',
                'display_name' => 'Menambah record',
                'description' => 'Mengijinkan menambah record'
            ],
            [
                'name' => 'edit',
                'display_name' => 'Edit Record',
                'description' => 'Mengijinkan mengubah record'
            ],
            [
                'name' => 'delete',
                'display_name' => 'Delete Record',
                'description' => 'Mengijinkan hapus record'
            ],
            [
                'name' => 'users',
                'display_name' => 'Manage Users',
                'description' => 'Mengelola CRUD user / pengguna'
            ]
        ];

        foreach ($permissions as $key => $value) {
            Permission::create($value);
        }
    }
}
