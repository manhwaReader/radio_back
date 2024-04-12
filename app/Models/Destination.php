<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'localisation', 'video', 'pictures'];
}
