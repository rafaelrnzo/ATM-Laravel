<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'from',
        'to',
        'nominal'
    ];

    public function account(){
        return $this->hasOne(User::class,'account');}
}
