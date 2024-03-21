<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Podcast;

class Episode extends Model
{
    protected $fillable = [
        'file',
        'title',
        'podcast_id',
    ];

    public function podcast() {
        return $this->belongsTo(Podcast::class);
    }
}
