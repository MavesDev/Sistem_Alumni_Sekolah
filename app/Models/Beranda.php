<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    use HasFactory;

    protected $fillable = [
        'headMaster_name',
        'headMaster_image',
        'headMaster_desc',
        'event_name',
        'event_image',
        'event_desc'
    ];
}
