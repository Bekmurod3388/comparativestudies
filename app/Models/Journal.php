<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'site_url',
        'img_url',
        'category',
    ];

    // If you have timestamp columns (created_at and updated_at)
    public $timestamps = false;

    // If you have specific types for your attributes
    protected $casts = [
        'scholar_link' => 'integer', // Assuming scholar_link is an integer
    ];
}
