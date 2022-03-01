<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $fillable = ['x', 'y', 'w', 'h', 'i', 'place_id', 'bbq', 'restriction'];

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }
    public function place() {
        return $this->belongsTo(Place::class);
    }
}