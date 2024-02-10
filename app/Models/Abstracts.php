<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abstracts extends Model
{
    use HasFactory;
    protected $fillable = ['locale', 'locale_id', 'applicant_name', 'dissertation_topic', 'academic_degree', 'specialty_code_and_name', 'protection_year', 'file_url'];

    public function locale()
    {
        return $this->belongsTo(Locale::class, 'locale_id');
    }
}
