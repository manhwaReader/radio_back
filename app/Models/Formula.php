<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Subscription;
use Podcast;

class Formula extends Model
{
    protected $fillable = ['title', 'price'];

    public function subs() {
        return $this->hasMany(Subscription::class);
    }

    public function podcasts() {
        return $this->hasMany(Podcast::class);
    }
}
