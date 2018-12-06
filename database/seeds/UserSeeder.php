<?php

use Illuminate\Database\Seeder;
use MyIBMT\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ngawur = [
            [
                'name' => 'Ngademin',
                'email' => 'admin@localhost.com',
                'password' => bcrypt('admin123')
            ],
        ];
        foreach ($ngawur as $key => $sbrg) {
            User::create($sbrg);
        }
    }
}
