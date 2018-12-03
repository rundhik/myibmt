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
                'name' => 'akademik',
                'display_name' => 'fakultas',
                'description' => 'User dapat menambah record ke sistem'
            ]
        ];

        foreach ($roles as $key => $value) {
            Role::create($value);
}
    }
}
