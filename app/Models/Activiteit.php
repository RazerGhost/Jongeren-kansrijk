<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activiteit extends Model
{
    use HasFactory;
    protected $table = 'activiteiten';
    protected $fillable = [
        'naam',
        'beschrijving',
        'locatie',
        'datum',
        'jongeren',
    ];

    protected $casts = [
        'datum' => 'datetime',
        'jongeren' => 'array',
    ];
}
