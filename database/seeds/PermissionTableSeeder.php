<?php

use Illuminate\Database\Seeder;
use MyIBMT\Models\Permission;

class PermissionTableSeeder extends Seeder
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
                'name' => 'Membuat',
                'display_name' => 'Membuat record',
                'description' => 'Mengijinkan menambah record'
            ],
            [
                'name' => 'Mengedit',
                'display_name' => 'Edit Record',
                'description' => 'Mengijinkan mengubah record'
            ],
            [
                'name' => 'Menghapus',
                'display_name' => 'Menghapus Record',
                'description' => 'Mengijinkan menghapus record'
            ],
            [
                'name' => 'Mengelola',
                'display_name' => 'Mengelola Users',
                'description' => 'Mengijinkan mengelola user'
            ]
        ];

        foreach ($permissions as $key => $value) {
            Permission::create($value);
        }
        }
}
