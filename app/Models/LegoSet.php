<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LegoSet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'set_number',
        'theme_id',
        'piece_count',
        'age_range',
        'price',
        'release_date',
        'stock_quantity',
    ];

    public function theme(): BelongsTo
    {
        return $this->belongsTo(Theme::class);
    }
}
