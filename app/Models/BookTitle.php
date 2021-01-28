<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

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

    public function getFormattedGenresAttribute()
    {
        return $this->genres->pluck('name')->join(', ');
    }

    public function getFormattedReleasedDateAttribute()
    {
        return date('m/Y', strtotime($this->released_date));
    }

    /** Must use ->with('books') before this call
     *
     * @return string
     */
    public function getAvailableAttribute()
    {
        return $this->books->where('is_available', Book::AVAILABLE)->count() . ' / ' . $this->books->count();
    }

    public function getThumbnailUrlAttribute()
    {
        return asset(Storage::url($this->thumbnail));
    }

    public function getOrdersCountAttribute()
    {
        return $this->books->reduce(function ($acc, $item) {
            return $item->orders->count() + $acc;
        }, 0);
    }
}
