<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $fillable = ['alumni_name', 'alumni_code','alumni_email' ,'alumni_job','alumni_last_year' , 'alumni_desc', 'alumni_image'];
}
