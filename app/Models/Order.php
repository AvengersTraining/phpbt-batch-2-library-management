<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    public const BORROWED = 0;
    public const RETURNED = 1;
    public const LOST = 2;
    public const OUT_DATE = 3;

    public const PAGINATE = 15;

    protected $table = 'user_book';

    private function formatDate($date)
    {
        return date('d/m/Y', strtotime($date));
    }

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

    public function getFormattedStartDateAttribute()
    {
        return self::formatDate($this->start_date);
    }

    public function getFormattedEndDateAttribute()
    {
        return self::formatDate($this->end_date);
    }

    public function getFormattedReturnDateAttribute()
    {
        return $this->return_date ? self::formatDate($this->return_date) : null;
    }

    public function getStatusInfoAttribute()
    {
        switch ($this->status) {
            case self::BORROWED:
                return ['class' => 'light', 'text' => __('manage_borrowing.borrowed')];
            case self::RETURNED:
                return ['class' => 'success', 'text' => __('manage_borrowing.returned')];
            case self::LOST:
                return ['class' => 'danger', 'text' => __('manage_borrowing.lost')];
            default:
                return null;
        }
    }

    public function getOutDateAttribute()
    {
        if ($this->end_date < Carbon::now()->format('Y-m-d h:m:s') && $this->status == Order::BORROWED) {
            return true;
        }

        return false;
    }
}
