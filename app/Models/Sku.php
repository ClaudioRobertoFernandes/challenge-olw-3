<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sku extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'product_id',
        'name',
        'price',
    ];

    public function skus(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }


}
