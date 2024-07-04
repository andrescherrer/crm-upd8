<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'estado_id',
        'nome'
    ];

    public function estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class);
    }
}
