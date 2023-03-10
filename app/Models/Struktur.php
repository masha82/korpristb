<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    protected $table = 'struktur';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['file', 'keterangan'];
}
