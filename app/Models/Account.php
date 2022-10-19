<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'Bank',
        'rekening',
        'saldo',
    ];

    public function user(){
        return $this->hasOne(User::class,'user');
    }

    public function transaction(){
        return $this->belongsToMany(User::class,'account');
    }

    public function transfer(){
        return $this->belongsToMany(User::class,'account');
    }

    public function withdraw(){
        return $this->belongsToMany(User::class,'account');
    }
}
