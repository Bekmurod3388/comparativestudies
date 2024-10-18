<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $all)
 */
class ComparativistScientist extends Model
{
    use HasFactory;

    // Specify the table if it doesn't follow the Laravel naming convention
    protected $table = 'comparativist_scientists';

    // Define which fields can be mass-assigned
    protected $fillable = [
        'name',
        'url',
    ];
}
