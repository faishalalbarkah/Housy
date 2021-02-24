<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function type_of_rent()
    {
        return $this->belongsTo('App\Type_of_rent');
    }

    public function amenities()
    {
        return $this->belongsTo('App\Amenities');
    }


}
