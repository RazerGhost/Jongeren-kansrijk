<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activiteit extends Model
{
    use HasFactory;
    protected $table = 'activiteiten';
    protected $fillable = [
        'naam',
        'beschrijving',
        'adres',
        'datum',
        'jongeren',
    ];

    protected $casts = [
        'datum' => 'datetime',
    ];

    public function EncodeJongeren($value)
    {
        $this->attributes['jongeren'] = json_encode($value);
    }

    public function DecodeJongeren($value)
    {
        return $this->attributes['jongeren'] = json_decode($value);
    }
}
