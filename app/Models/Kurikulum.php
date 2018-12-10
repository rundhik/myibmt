<?php

namespace MyIBMT\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kurikulum extends Model
{
    use SoftDeletes;
    protected $table = 'kurikulums';
    protected $fillable = [
        'nm_kurikulum',
        'thn_semester',
    ];

    public function matakuliahs()
    {
        return $this->belongsToMany('MyIBMT\Models\MataKuliah', 'kelas_perkuliahans', 'kurikulum_id', 'matakuliah_id');
    }
    
    public function kelasperkuliahans()
    {
        return $this->hasManyThrough(
            'MyIBMT\Models\Jadwal',
            'MyIBMT\Models\KelasPerkuliahan',
            'kurikulum_id', // Foreign Key di tabel kelas_perkuliahans
            'kelas_perkuliahan_id', // Foreign Key di tabel jadwals
            'id', //Local key di tabel kurikulums
            'id' //Local key di tabel kelas_perkuliahans
        );
    }
}
