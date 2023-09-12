<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
//    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'address',
        'city',
        'state',
        'zip_code',
        'country',
        'neighbourhood',
        'number',
        'complement',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
