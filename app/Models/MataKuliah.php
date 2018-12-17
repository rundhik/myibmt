<?php

namespace MyIBMT\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MataKuliah extends Model
{
    use SoftDeletes;
    protected $table = 'mata_kuliahs';
    protected $fillable = [
        'kode_mk',
        'nm_matakuliah',
        'sks',
    ];

    public function prodi()
    {
        return $this->belongsTo('MyIBMT\Models\ProgramStudi', 'prodi_id');
        
    }

    public function kelaskuliahs()
    {
        return $this->hasMany('MyiBMT\Models\KelasPerkuliahan',  'matakuliah_id');
    }
}
