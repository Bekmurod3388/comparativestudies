<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $formFields)
 */
class Carousel extends Model
{
    use HasFactory;

    protected $table = 'carousel';
    protected $fillable = ['title', 'img_url'];

}
