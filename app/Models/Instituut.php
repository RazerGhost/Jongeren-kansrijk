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
        'adres',
        'email',
        'activiteiten',
    ];

    public function activiteiten(): HasMany
    {
        return $this->hasMany(Activiteit::class);
    }
}
