<?php

use Illuminate\Database\Seeder;
use MyIBMT\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'superadmin',
                'display_name' => 'Administrator',
                'description' => 'User memiliki hak akses penuh ke sistem'
            ],
            [
                'name' => 'fakultas',
                'display_name' => 'Staff Fakultas',
                'description' => 'User dapat menambah record ke sistem'
            ]
        ];

        foreach ($roles as $key => $value) {
            Role::create($value);
        }

        $r = new Role;
        $r = $r->find(1);
        $r->attachPermission(1);
        $r->attachPermission(2);
        $r->attachPermission(3);
        $r->attachPermission(4);

        $r = new Role;
        $r = $r->find(2);
        $r->attachPermission(1);
        $r->attachPermission(2);
    }
}
