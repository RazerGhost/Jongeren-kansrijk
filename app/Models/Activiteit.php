<?php

namespace App\Models;

use App\Http\Controllers\JongereController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function jongeren(): HasMany
    {
        return $this->hasMany(JongereController::class);
    }

    protected $casts = [
        'datum' => 'datetime',
        'jongeren' => 'array',
    ];
}
