<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanBansos extends Model
{
    protected $table = 'keg_bansos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tgl_keg', 'keterangan', 'tempat'];
}
