<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{

    protected $fillable = [
        'id','title','text','photo'
    ];
}
