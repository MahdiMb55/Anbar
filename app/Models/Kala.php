<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Anbar;

class Kala extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'name',
        'anbar_id',
        'vahed'
    ];

    public function anbar(): BelongsTo
    {
        return $this->belongsTo(Anbar::class);
    }
}
