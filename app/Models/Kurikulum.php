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
        return $this->hasMany('MyIBMT\Models\MataKuliah', 'kurikulum_id', 'id');
    }

    public function jadwals()
    {
        return $this->hasManyThrough(
            'MyIBMT\Models\Jadwal',
            'MyIBMT\Models\MataKuliah',
            'kurikulum_id', // Foreign Key di tabel mata_kuliahs
            'matakuliah_id', // Foreign Key di tabel jadwals
            'id', //Local key di tabel kurikulums
            'id' //Local key di tabel mata_matakuliahs
        );
    }
}
