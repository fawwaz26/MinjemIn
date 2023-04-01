<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    use HasFactory;
    public $primaryKey = 'id_pinjaman';
    protected $fillable = [
        'pinjaman'
    ];
}