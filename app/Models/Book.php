<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    const AVAILABLE = 1;
    const UNAVAILABLE = 0;
    const PAGINATE = 20;

    public function bookTitle(): BelongsTo
    {
        return $this->belongsTo(BookTitle::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
