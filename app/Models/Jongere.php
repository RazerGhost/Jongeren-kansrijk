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
        'name',
        'surname',
        'dob',
        'phonenumber',
        'email',
        'address',
        'institute',
    ];

    public function activities(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }

}
