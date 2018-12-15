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
        'thn_semester_id',
        'kode_prodi_id'
    ];

    public function prodi()
    {
        return $this->belongsTo('MyIBMT\Models\ProgramStudi', 'kode_prodi_id');
    }

    public function thn_semester()
    {
        return $this->belongsTo('MyIBMT\Models\TahunSemester', 'thn_semester_id');
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
