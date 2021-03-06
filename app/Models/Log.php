<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Log extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'visit_type', 'conflict', 'prepayment', 'amount', 'date', 'from', 'to', 'arrived', 'late', 'note', 'place_id', 'table_id', 'type', 'text', 'responsible_email', 'responsible_name', 'reason_failed', 'feedback'];

    public function table() {
        return $this->belongsTo(Table::class);
    }
    public function place() {
        return $this->belongsTo(Place::class);
    }
}
