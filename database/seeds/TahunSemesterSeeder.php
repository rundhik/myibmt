<?php

use Illuminate\Database\Seeder;
use MyIBMT\Models\TahunSemester;

class TahunSemesterSeeder extends Seeder
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
                'thn_semester' => 20181,
                'deskripsi' => '2018/2019 GANJIL',
            ],
            [
                'id' => 2,
                'thn_semester' => 20182,
                'deskripsi' => '2018/2019 GENAP',
            ],
            [
                'id' => 3,
                'thn_semester' => 20183,
                'deskripsi' => '2018/2019 PENDEK',
            ],
        ];
        foreach ($ngawur as $key => $sbrg) {
            TahunSemester::create($sbrg);
        }
    }
}
