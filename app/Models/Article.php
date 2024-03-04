<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $all)
 */
class Article extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'locale_id',
        'name',
        'journal_name',
        'authors',
        'file_url',
        'photo_url',
        'published_date',
        'user_id',
        'status',
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'locale_id' => 'integer',
        'published_date' => 'datetime',
    ];

    /**
     * Get the locale that owns the article.
     */
    public function locale()
    {
        return $this->belongsTo(Locale::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
