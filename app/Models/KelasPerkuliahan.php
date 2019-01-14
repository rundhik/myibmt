<?php

namespace MyIBMT\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KelasPerkuliahan extends Model
{
    use SoftDeletes;
    protected $table = 'kelas_perkuliahans';
    protected $fillable = ['semester'];

    public function kurikulums()
    {
        return $this->belongsTo('MyIBMT\Models\Kurikulum', 'kurikulum_id');
    }

    public function matakuliahs()
    {
        return $this->belongsTo('MyIBMT\Models\MataKuliah', 'matakuliah_id');
    }

    public function jadwals()
    {
        return $this->hasMany('MyIBMT\Models\Jadwal', 'kelas_perkuliahan_id', 'id');
    }
}
