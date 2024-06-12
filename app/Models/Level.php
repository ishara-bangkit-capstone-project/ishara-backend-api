<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'stage_id',
    ];

    /**
     * @return BelongsTo
     */
    public function stage(): BelongsTo
    {
        return $this->belongsTo(Stage::class);
    }

    public function userLevelStar(): HasOne
    {
        return $this->hasOne(UserLevelStar::class);
    }

    /**
     * @return HasMany
     */
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
