<?php

namespace MyIBMT\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KelasPerkuliahan extends Model
{
    use SoftDeletes;
    protected $table = 'kelas_perkuliahans';
    protected $fillable = ['kurikulum_id', 'matakuliah_id'];

    public function kurikulums()
    {
        return $this->belongsToMany('MyIBMT\Models\Kurikulum', 'kurikulums', 'kurikulum_id', 'id');
    }

    public function matakuliahs()
    {
        return $this->belongsToMany('MyIBMT\Models\MataKuliah', 'matakuliahs', 'matakuliah_id', 'id');
    }

    public function jadwals()
    {
        return $this->hasMany('MyIBMT\Models\Jadwal', 'kelas_perkuliahan_id', 'id');
    }
}
