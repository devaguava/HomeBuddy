<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    protected $table = 'worker';
    protected $primaryKey = 'id_worker';
    protected $fillable = [
        'judul',
        'deskripsi',
        'foto'
    ];
}
