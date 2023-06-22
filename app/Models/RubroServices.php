<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RubroServices extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    protected $fillable = [
        'id','id_rubro','rubro','title','text','photo'
    ];
}
