<?php

namespace App\Models;

use App\Enums\OrderStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderSku extends Pivot
{
//    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'order_id',
        'sku_id',
        'product',
        'quantity',
        'unitary_price',
    ];

    protected $casts
            = [
                'status' => OrderStatusEnum::class,
            ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function sku(): BelongsToMany
    {
        return $this->belongsToMany(Sku::class)->using(__CLASS__);
    }
}
