<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table='tb_materi';
    protected $fillable=[
        'kode_materi',
        'sub_materi',
        'materi',
        'thumbnail',
    ];

    public function getTakeImageAttribute(){
        return "/storage/" . $this->thumbnail;
    }
}