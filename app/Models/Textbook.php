<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @property mixed $file
 */
class Textbook extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_name',
        'authors',
        'file',
    ];
}
