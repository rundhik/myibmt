<?php

use Illuminate\Database\Seeder;
use MyIBMT\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
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
                'kode_mk' => 'TI01',
                'nm_matakuliah' => 'Pancasila',
                'sks' => 3,
                'prodi_id' => 1,
            ],
            [
                'kode_mk' => 'TI02',
                'nm_matakuliah' => 'Agama',
                'sks' => 3,
                'prodi_id' => 1,
            ],
        ];
        foreach ($ngawur as $key => $sbrg) {
            MataKuliah::create($sbrg);
        }
    }
}
