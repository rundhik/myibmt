<?php

namespace MyIBMT\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RuangPerkuliahan extends Model
{
    use SoftDeletes;
    protected $table = 'ruang_perkuliahans';
    protected $fillable = [
        'nm_ruang',
        'lokasi',
    ];
    public function jadwals()
    {
        return $this->hasMany('MyIBMT\Models\Jadwal', 'ruang_id', 'id');
    }
}
