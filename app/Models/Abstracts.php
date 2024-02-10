<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abstracts extends Model
{
    use HasFactory;
    protected $fillable = [
        "applicant_name", "dissertation_topic", "academic_degree", "specialty_code_and_name", "protection_year"
    ];
}
