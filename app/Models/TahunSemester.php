<?php

namespace MyIBMT\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TahunSemester extends Model
{
    use SoftDeletes;
    protected $table = 'tahun_semesters';
    protected $fillable = [
        'thn_semester',
        'deskripsi'
    ];

    public function kurikulums()
    {
        return $this->hasMany('MyIBMT\Models\Kurikulum', 'thn_semester_id', 'id');
    }

    public function kelasperkuliahans()
    {
        return $this->hasManyThrough(
            'MyIBMT\Models\KelasPerkuliahan',
            'MyIBMT\Models\Kurikulum',
            'thn_semester_id', // Foreign Key di tabel kurikulums
            'kurikulum_id', // Foreign Key di tabel kelas_perkuliahans
            'id', //Local key di tabel kurikulums
            'id' //Local key di tabel mata_matakuliahs
        );
    }
}
