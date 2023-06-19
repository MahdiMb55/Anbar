<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Darkhast extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'user_id',
        'anbar_id',
        'department'
    ];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function anbar() {
        return $this->belongsTo(Anbar::class);
    }

    public function darkhastrows():HasMany {
        return $this->hasMany(DarkhastRow::class);
    }

}
