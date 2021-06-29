<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $fillable = [
        'galeri_name',
        'galeri_course',
        'galeri_last_year',
        'galeri_image'
    ];
}
