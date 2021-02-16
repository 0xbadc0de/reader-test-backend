<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineRead extends Model
{
    use HasFactory;

    public function line()
    {
        return $this->belongsTo(Line::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function time_read()
    {
        return $this->belongsTo(TimeRead::class, 'id', 'time_read_id');
    }
}
