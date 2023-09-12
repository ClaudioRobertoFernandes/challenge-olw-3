<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'brand_id',
        'category_id',
        'name',
        'slug',
        'description',
        'technical_description',
    ];

    public function brands(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
