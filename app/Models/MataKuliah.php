<?php

namespace MyIBMT\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MataKuliah extends Model
{
    use SoftDeletes;
    protected $table = 'mata_kuliahs';
    protected $fillable = [
        'nm_matakuliah',
        'sks',
    ];

    public function kurikulum()
    {
        return $this->belongsTo('MyIBMT\Models\Kurikulum', 'kurikulum_id');
        
    }
}
