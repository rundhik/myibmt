<?php

use Illuminate\Database\Seeder;
use MyIBMT\Models\ProgramStudi;

class ProgramStudiSeeder extends Seeder
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
                'id' => 1,
                'kode_prodi' => 61101,
                'deskripsi' => 'S1 Manajemen',
            ],
            [
                'id' => 2,
                'kode_prodi' => 61201,
                'deskripsi' => 'S2 Manajemen',
            ],
        ];
        foreach ($ngawur as $key => $sbrg) {
            ProgramStudi::create($sbrg);
        }
    }
}
