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
            ['nm_kurikulum' => 'S1 Kelas Pagi',
            'thn_semester' => '20181'],
            ['nm_kurikulum' => 'S1 Kelas Malam',
            'thn_semester' => '20181'],

        ];

        foreach ($ngawur as $key => $sbrg) {
            Kurikulum::create($sbrg);
        }
    }
}
