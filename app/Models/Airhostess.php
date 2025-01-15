<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class airhostess extends Model
{
    protected $fillable =([
        'name',
        'email',
        'filghtnumber',
        'age',
    ]);
    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}