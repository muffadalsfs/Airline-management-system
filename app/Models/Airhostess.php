<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class  Airhostess extends Model
{
      use HasFactory;
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