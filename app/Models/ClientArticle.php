<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientArticle extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'client_articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'locale_id',
        'name',
        'file_url',
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
