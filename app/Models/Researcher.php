<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Researcher extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'position',
        'research',
        'scholar',
        'email',
        'img',
    ];

    // If you have timestamp columns (created_at and updated_at)
    public $timestamps = false;

    // If you have specific types for your attributes
    protected $casts = [
        'scholar_link' => 'integer', // Assuming scholar_link is an integer
    ];

    // Additional methods, relationships, or customizations can be added here

    public function book()
    {
        return $this->hasMany(ResearcherBook::class);
    }
}
