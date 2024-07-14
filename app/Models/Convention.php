<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convention extends Model
{
    use HasFactory;

    protected $fillable = [
        'locale_id',
        'parent_id',
        'name',
        'description',
        'file_url',
        'photo_url',
        'type',
        'created_at',
        'updated_at',
    ];

    /**
     * Get the parent convention.
     */
    public function parent()
    {
        return $this->belongsTo(Convention::class, 'parent_id');
    }

    /**
     * Get the child conventions.
     */
    public function children()
    {
        return $this->hasMany(Convention::class, 'parent_id');
    }
}
