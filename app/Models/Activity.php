<?php

namespace App\Models;

use App\Http\Controllers\JongereController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Activity extends Model
{
    use HasFactory;
    protected $table = 'activities';
    protected $fillable = [
        'name',
        'description',
        'location',
        'date',
        'jongeren',
    ];

    public function jongeren(): HasMany
    {
        return $this->hasMany(JongereController::class);
    }

    public function setJongerenAttribute($value)
    {
        $this->attributes['jongeren'] = json_encode($value);
    }

    public function getJongerenAttribute($value)
    {
        return $this->attributes['jongeren'] = json_decode($value);
    }

    protected $casts = [
        'jongeren' => 'array',
    ];
}
