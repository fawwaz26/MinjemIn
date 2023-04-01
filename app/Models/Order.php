<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    protected $fillable = [
        'status', 'ktm', 'kk','ktp''nama_lengkap','nim','agama','ttl','jenis_kelamin','no_hp', 'nama_ayah','nama_ibu','no_hp_ayah','no_hp_ibu'
    ];

    static function getOrder(){
        $return=DB::table('orders')
        ->join('pinjamen','orders.id_pinejaman','=','pinjamen.id_pinjaman');
        return $return;
    }
}
