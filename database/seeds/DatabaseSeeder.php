<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TahunSemesterSeeder::class);
        $this->call(ProgramStudiSeeder::class);
        $this->call(KurikulumSeeder::class);
        $this->call(MataKuliahSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
    }
}
