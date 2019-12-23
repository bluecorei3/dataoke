<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan_desa';

    protected $fillable = [
      'judul_kegiatan',
      'content_kegiatan',
      'gambar_kegiatan'
    ];

}
