<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    function getCategory(){
        return $this->belongsTo(ServiceName::class, 'category');
        // return $this->where('country_id', 'name')->get();
    }

}
