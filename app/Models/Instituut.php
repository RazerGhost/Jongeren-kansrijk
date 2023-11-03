<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
