<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'period',
        'end_date', 
        'user_id',
        'formula_id',
    ];

    public function formula() {
        return $this->belongsTo(Formula::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
