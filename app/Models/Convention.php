<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convention extends Model
{
    use HasFactory;
    protected $fillable = ['locale', 'locale_id', 'name', 'description', 'published_date', 'photo_url', 'file_url'];
}
