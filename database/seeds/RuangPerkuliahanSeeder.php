<?php

use Illuminate\Database\Seeder;
use MyIBMT\Models\RuangPerkuliahan;

class RuangPerkuliahanSeeder extends Seeder
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
                'nm_ruangan' => 'England Room',
                'lokasi' => 'IBMT Campus Lt. 2'
            ],
            [
                'nm_ruangan' => 'USA Room',
                'lokasi' => 'IBMT Campus Lt. 2'
            ],
            [
                'nm_ruangan' => 'Netherland Room',
                'lokasi' => 'IBMT Campus Lt. 2'
            ],
            [
                'nm_ruangan' => 'Canada Room',
                'lokasi' => 'IBMT Campus Lt. 2'
            ],
            [
                'nm_ruangan' => 'Italy Room',
                'lokasi' => 'IBMT Campus Lt. 2'
            ],
            [
                'nm_ruangan' => 'Swiss Room',
                'lokasi' => 'IBMT Campus Lt. 2'
            ],
            [
                'nm_ruangan' => 'International Room',
                'lokasi' => 'IBMT Campus Lt. 1'
            ],
        ];
        foreach ($ngawur as $key => $sbrg) {
            RuangPerkuliahan::create($sbrg);
        }
    }
}
