<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    protected $casts = [
        'geboortedatum' => 'date:d-m-Y',
    ];


}
