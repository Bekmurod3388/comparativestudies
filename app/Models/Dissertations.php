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
        if ($filters['search_language'] ?? false){
            $query->where('language', '%' . request('search_language') . '%');
            }
        if ($filters['search'] ?? false){
            $query->where('language', '%' . request('search') . '%')
                ->orWhere('country', '%' . request('search') . '%')
                ->orWhere('topic', '%' . request('search') . '%')
                ->orWhere('author', '%' . request('search') . '%');
        }
    }
    protected $table = 'dissertations';

    protected $fillable = [
        'language', 'country', 'author', 'topic', 'file_url', 'thesis_date'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'thesis_date' => 'datetime',
    ];

}
