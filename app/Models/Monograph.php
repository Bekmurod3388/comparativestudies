<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monograph extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'locale_id',
        'name',
        'publisher',
        'authors',
        'file_url',
        'photo_url',
        'published_date',
    ];
    public function locale()
    {
        return $this->belongsTo(Locale::class);
    }
}
