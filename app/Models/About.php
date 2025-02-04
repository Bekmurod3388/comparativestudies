<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, string $string1)
 */
class About extends Model
{
    use HasFactory;

    protected $fillable = [
        "title", "url", "type", "img"
    ];
}
