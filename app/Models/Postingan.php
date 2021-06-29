<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    use HasFactory;


    protected $fillable = [
        'post_name',
        'post_author',
        'post_author_id',
        'post_author_image',
        'post_author_job',
        'post_course',
        'post_category',
        'post_desc',
        'post_image'
    ];
}
