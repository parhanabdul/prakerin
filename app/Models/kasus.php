<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasus extends Model
{
    protected $fillable = ['positif', 'sembuh','meninggal','tanggal','id_kecamatan'];
    public $timestamps = true;

    public function Rw(){
        return $this->belongsTo('App\Models\Rw','id_rw');
    }
        
}
