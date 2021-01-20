<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    public const BORROWED = 0;
    public const RETURNED = 1;
    public const LOST = 2;

    protected $table = 'user_book';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

    /**
     * Get the admin user who approve this order
     * @return BelongsTo
     */
    public function createdAdmin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_admin_id');
    }

    /**
     * Get the admin user who return this order
     * @return BelongsTo
     */
    public function returnedAdmin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'returned_by_admin_id');
    }

    public function scopeWhereByAttribute($query, $attributes)
    {
        return $query->where($attributes);
    }
}
