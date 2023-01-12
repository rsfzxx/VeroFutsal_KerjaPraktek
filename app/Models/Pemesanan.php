<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'kursi',
        'waktu',
        'total',
        'status',
        'rute_id',
        'penumpang_id',
        'kasir_id'
    ];

    public function rute()
    {
        return $this->belongsTo('App\Models\Rute', 'rute_id');
    }

    public function penumpang()
    {
        return $this->belongsTo('App\Models\User', 'penumpang_id');
    }

    public function kasir()
    {
        return $this->belongsTo('App\Models\User', 'kasir_id');
    }

    protected $table = 'pemesanan';
}
