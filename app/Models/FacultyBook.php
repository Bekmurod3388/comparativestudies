<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $formFields)
 */
class FacultyBook extends Model
{
    use HasFactory;

    protected $table = 'facultybooks';

    protected $fillable = [
        'book_name',
        'authors',
        'publication_date',
        'title',
        'description',
        'image_url',
        'file_url',
    ];

    protected array $dates = [
        'publication_date',
    ];
}
