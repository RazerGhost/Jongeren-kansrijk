<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jongere extends Model
{
    use HasFactory;
    protected $table = 'jongeren';
    protected $fillable = [
        'voornaam',
        'achternaam',
        'geboortedatum',
        'telefoonnummer',
        'email',
        'adres',
        'instituut',
    ];

    public function activiteiten(): BelongsTo
    {
        return $this->belongsTo(Activiteit::class);
    }

}
