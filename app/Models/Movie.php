<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Movie extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable=[
        'title',
        'duration',
        'release_date',
        'is_published'
    ];
}
