<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;
    protected $fillable = [
        'rekening',
        'nominal'
    ];

    public function account(){
        return $this->hasOne(User::class,'account');}

}
