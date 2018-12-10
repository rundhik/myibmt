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

    public function kurikulums()
    {
        return $this->belongsToMany('MyiBMT\Models\Kurikulum', 'kurikulum_mata_kuliahs', 'matakuliah_id', 'kurikulum_id');
    }
}
