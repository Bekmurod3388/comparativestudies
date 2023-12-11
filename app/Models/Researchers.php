<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $formFields)
 */
class Researchers extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'position',
        'research_fields',
        'photo',
        'email',
        'facebook_url',
        'twitter_url',
        'instagram_url',
    ];
}
