<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Institute extends Model
{
    use HasFactory;
    protected $table = 'institutes';
    protected $fillable = [
        'name',
        'description',
        'address',
        'email',
        'phonenumber',
    ];
}
