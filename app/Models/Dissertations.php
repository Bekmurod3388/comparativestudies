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

    public function scopeFilter($query, array $filters){
        if ($filters['search_author'] ?? false){
            $query->where('author', '%' . request('search_author') . '%');
        }
        if ($filters['search_country'] ?? false){
            $query->where('country', '%' . request('search_country') . '%');
        }
        if ($filters['search_locale_id'] ?? false){
            $query->where('locale_id', '%' . request('search_locale_id') . '%');
            }
        if ($filters['search'] ?? false){
            $query->where('locale_id', '%' . request('search') . '%')
                ->orWhere('country', '%' . request('search') . '%')
                ->orWhere('topic', '%' . request('search') . '%')
                ->orWhere('author', '%' . request('search') . '%');
        }
    }
    protected $table = 'dissertations';

    protected $fillable = [
        'locale_id', 'country', 'author', 'topic', 'file_url', 'thesis_date'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'thesis_date' => 'datetime',
    ];
    public function locale()
    {
        return $this->belongsTo(Locale::class);
    }

}
