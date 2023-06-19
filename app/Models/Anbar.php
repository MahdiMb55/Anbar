<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Kala;

class Anbar extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function kalas(): HasMany
    {
        return $this->hasMany(Kala::class);
    }

    public function darkhasts(): HasMany
    {
        return $this->hasMany(Kala::class);
    }

}
