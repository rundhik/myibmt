<?php

namespace MyIBMT\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProgramStudi extends Model
{
    use SoftDeletes;
    protected $table = 'program_studis';
    protected $fillable = [
        'kode_prodi',
        'deskripsi'
    ];

    public function kurikulums()
    {
        return $this->hasMany('MyIBMT\Models\Kurikulum', 'kode_prodi_id', 'id');
    }
}
