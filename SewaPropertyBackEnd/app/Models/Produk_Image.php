<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk_Image extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

}
