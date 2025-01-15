<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable=([
        'name',
        'lastname',
        'fightname',
        'age',
        'gender',
        'email',
    ]);
     public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}