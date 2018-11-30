<?php

use Illuminate\Database\Seeder;
use MyIBMT\Models\Kurikulum;

class KurikulumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ngawur = [
            ['nm_kurikulum' => 'S1 IBM 2018-1',
            'thn_semester' => '20181',
            'prodi' => 61201],
            ['nm_kurikulum' => 'S1 PRO 2018-1',
            'thn_semester' => '20181',
            'prodi' => 61201],
            ['nm_kurikulum' => 'S1 WIM 2018-1',
            'thn_semester' => '20181',
            'prodi' => 61201],
            ['nm_kurikulum' => 'S1 IBM 2018-2',
            'thn_semester' => '20182',
            'prodi' => 61201],
            ['nm_kurikulum' => 'S1 PRO 2018-2',
            'thn_semester' => '20182',
            'prodi' => 61201],
            ['nm_kurikulum' => 'S1 WIM 2018-2',
            'thn_semester' => '20182',
            'prodi' => 61101],
            ['nm_kurikulum' => 'S2 Manajamen REG 2018-1',
            'thn_semester' => '20181',
            'prodi' => 61101],
            ['nm_kurikulum' => 'S2 Manajamen REG 2018-2',
            'thn_semester' => '20182',
            'prodi' => 61101],
        ];

        foreach ($ngawur as $key => $sbrg) {
            Kurikulum::create($sbrg);
        }
    }
}
