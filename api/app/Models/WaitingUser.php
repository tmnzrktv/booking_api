<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaitingUser extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'prepayment', 'amount', 'date', 'time', 'note', 'place_id', 'table_id'];
}
