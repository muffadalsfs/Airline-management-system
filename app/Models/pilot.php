<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pilot extends Model
{
    protected $fillable =([
        'name',
        'fightname',
        'age'
    ]);
    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}