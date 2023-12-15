<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
    */

    protected $fillable = [
        'image',
        'title',
        'content',
    ];

    public function recipes(): HasMany
    {
        return $this->hasMany(Recipe::class);
    }
}
