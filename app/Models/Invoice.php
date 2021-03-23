<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public function customer(){
        // 1 faktura moze nalezec do 1 konkretnego klienta
        return $this->belongsTo('App\Models\Customer');
    }
}
