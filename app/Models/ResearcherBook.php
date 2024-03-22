<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearcherBook extends Model
{
    use HasFactory;

    protected $table = 'researchers_books';

    protected $fillable = [
        'researcher_id',
        'name',
        'country',
        'pub_date',
        'pages',
        'publisher',
    ];

    protected $casts = [
        'pub_date' => 'date', // Automatically cast the 'pub_date' attribute to a date
    ];

    // Define the relationship to the Researcher model
    public function researcher()
    {
        return $this->belongsTo(Researcher::class, 'researcher_id');
    }
    public function locale()
    {
        return $this->belongsTo(Locale::class);
    }
}
