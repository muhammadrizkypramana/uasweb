<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table        = 'nilai'; 
    protected $fillable     = ['id', 'makul_id', 'mahasiswa_id', 'nilai'];
    public $timestamps      = false;

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'id');
    }
    
    public function makul()
    {
        return $this->belongsTo(Makul::class, 'makul_id', 'id');
    }
}
