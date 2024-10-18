<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $all)
 * @property mixed $id
 */
class Locale extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'locales';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
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
        'name' => 'string',
    ];

    public function abstract()
    {
        return $this->hasMany(Abstracts::class);
    }

    public function article()
    {
        return $this->hasMany(Article::class);
    }

    public function dissertation()
    {
        return $this->hasMany(Dissertations::class);
    }

    public function monograph()
    {
        return $this->hasMany(Monograph::class);
    }
    public function researcherbooks()
    {
        return $this->hasMany(ResearcherBook::class);
    }
    public function researcherarticle()
    {
        return $this->hasMany(ResearcherArticle::class);
    }

   public function training_manual()
    {
        return $this->hasMany(TrainingManual::class);
    }

   public function about_books()
    {
        return $this->hasMany(ResearcherBook::class);
    }

}
