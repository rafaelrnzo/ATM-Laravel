<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'rekening',
        'transaksi',
        'no_bayar',
        'nominal'
    ];

    public function account(){
        return $this->hasOne(User::class,'account');
    }
}
