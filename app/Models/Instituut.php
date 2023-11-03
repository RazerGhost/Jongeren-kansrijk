<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instituut extends Model
{
    use HasFactory;
    protected $table = 'instituten';
    protected $fillable = [
        'naam',
        'beschrijving',
        'adres',
        'email',
        'telefoonnummer',
        'jongeren',
    ];
    protected $casts = [
        'jongeren' => 'array',
    ];
}
