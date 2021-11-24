<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investors extends Model
{
    protected $fillable = [
         'name', 'address', 'phone', 'investment'
    ];

    public function investors(){
        return $this->belongsTo('App\Investors');
    }
}
