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
        'status',
    ];
    public function RuangPerkuliahan(){
        return $this->belongsTo('MyIBMT\Models\RuangPerkuliahan', 'ruang_id');
    }
    public function Dosen(){
        return $this->belongsTo('MyIBMT\Models\Dosen', 'dosen_id');
    }
    
}
