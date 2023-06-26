<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Checkout extends Model
{
    use HasFactory,softDeletes;

    protected $fillable = ['user_id', 'camp_id','payment_status', 'midtrans_url', 'midtrans_booking_code', 'discount_id', 'discount_percentage', 'total'];

    public function setExpiredAttribute($value)
    {
        $this->attributes['expired'] = date('Y-m-t', strtotime($value));
    }

    public function camp(): BelongsTo
    {
        return $this->belongsTo(camps::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }
    public function discount(): BelongsTo
    {
        return $this->belongsTo(discount::class);
    }


}
