<?php

namespace MyIBMT\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jadwal extends Model
{
    use SoftDeletes;
    protected $table = 'jadwals';
    protected $fillable = [
        'hari',
        'jam',
        'jml_peserta',
        'status'
    ];

    public function kelasperkuliahan()
    {
        return $this->belongsTo('MyIBMT\Models\KelasPerkuliahan', 'kelas_perkuliahan_id', 'id');
    }

    public function dosen()
    {
        return $this->belongsTo('MyIBMT\Models\Dosen', 'dosen_id', 'id');
    }

    public function ruangkuliah()
    {
        return $this->belongsTo('MyIBMT\Models\RuangPerkuliahan', 'ruang_id', 'id');
    }
}
