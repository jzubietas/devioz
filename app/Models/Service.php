<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $guarded=['id'];
    protected $fillable = [
        'id','title','text','photo'
    ];
}
