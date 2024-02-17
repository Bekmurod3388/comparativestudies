<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearcherArticle extends Model
{
    use HasFactory;
    protected $table = 'researchers_articles';

    protected $fillable = [
        'article_topic',
        'authors',
        'article_type',
        'protection_year',
        'file_url',
        'photo_url',
        ];
    public static function articleTypesList()
    {
        return [
            'Scopus',
            'Oak',
            ];
    }
}
