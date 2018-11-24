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
        'prodi',
    ];

    public function matakuliahs()
    {
    return $this->hasMany('MyIBMT\Models\MataKuliah', 'kurikulum_id', 'id');
    
    }
}
