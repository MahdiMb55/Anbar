<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DarkhastRow extends Model
{
    use HasFactory;

    protected $fillable =[
        'count',
        'kalaname',
        'description',
        'darkhast_id'
    ];
    public function darkhast() : BelongsTo {
        return $this->belongsTo(Darkhast::class);
    }
}
