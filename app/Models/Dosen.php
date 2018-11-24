<?php

namespace MyIBMT\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dosen extends Model
{
    use SoftDeletes;
    protected $table = 'dosens';
    protected $fillable = [
        'nidn',
        'nm_dosen',
    ];
    public function jadwalsss()
    {
        return $this->hasMany('MyIBMT\Models\Jadwal', 'dosen_id', 'id');
    }
}
