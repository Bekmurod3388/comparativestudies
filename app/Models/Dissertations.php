<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $formFields)
 */
class Dissertations extends Model
{
    use HasFactory;

    protected $table = 'dissertations';

    protected $fillable = [
        'language', 'country', 'author', 'topic', 'file_url', 'thesis_date'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'thesis_date' => 'datetime',
    ];
}
