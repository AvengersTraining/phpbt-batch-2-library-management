<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BookTitle extends Model
{
    use HasFactory;

    public const PAGINATE = 10;

    protected $fillable = [
        'name',
        'author',
        'released_date',
        'description',
        'thumbnail',
    ];

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }
}
