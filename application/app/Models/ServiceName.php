<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceName extends Model
{
    use HasFactory;

    // public function CountServiceInFaq(){
    //     return $this->belongsTo(FaqTable::class,'service_name_id');
    // }

    protected $guarded = [];

}
