<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeatureSkus extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'sku_id',
        'feature_id',
        'value',
    ];
}
