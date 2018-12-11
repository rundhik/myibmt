<?php

use Illuminate\Database\Seeder;
use MyIBMT\Models\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dosen = [
            [
                'nm_dosen' => 'Yudithia Dian Putra',
                'nidn' => '0317346789'
            ],
            [
                'nm_dosen' => 'Handy Aribowo',
                'nidn' => '07303178579'
            ],
        ];

        foreach ($dosen as $key => $value) {
            Dosen::create($value);
        }
    }
}
