<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flight extends Model
{
    use HasFactory;
    protected $fillable =([
        'name',
        'number'
    ]);
     public function airhostesses()
    {
        return $this->hasMany(Airhostess::class);
    }

    public function pilots()
    {
        return $this->hasMany(Pilot::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}