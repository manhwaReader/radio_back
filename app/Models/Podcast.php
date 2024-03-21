<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Category;
use Formula;

class Podcast extends Model
{
    protected $fillable = [
        'cover',
        'title', 
        'formula_id',
        'category_id',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function formula() {
        return $this->belongsTo(Formula::class);
    }
}
