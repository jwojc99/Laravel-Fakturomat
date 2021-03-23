<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function invoices(){
        // 1 klient moze miec wiele faktur
        return $this->hasMany('App\Models\Invoice');
    }
}
