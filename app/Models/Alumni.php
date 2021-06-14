<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $fillable = ['alumni_name', 'alumni_code', 'alumni_job', 'alumni_desc', 'alumni_image'];
}
