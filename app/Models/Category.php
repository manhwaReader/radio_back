<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Podcast;

class Category extends Model
{
    protected $fillable = ['title'];

    public function podcasts() {
        return $this->hasMany(Podcast::class);
    }
}
