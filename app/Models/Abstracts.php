<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abstracts extends Model
{
    use HasFactory;
    protected $fillable = ['locale', 'locale_id', 'applicant_name', 'dissertation_topic', 'academic_degree', 'specialty_code_and_name', 'protection_year', 'file_url'];

    protected $table = 'abstracts';
    public function locale()
    {
        return $this->belongsTo(Locale::class, 'locale_id');
    }
    public static function academicDegreesList()
    {
        return [
            'Bachelor',
            'Master',
            'PhD',
            'DSc',
            'Associate Degree',
            'Professional Degree',
            'Doctor of Medicine',
            'Juris Doctor',
            'Master of Business Administration',
            'Doctor of Education',
            'Doctor of Philosophy'
        ];
    }
}
