<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thought extends Model
{

    protected $fillable = [
        'id','description','author'
    ];
}
