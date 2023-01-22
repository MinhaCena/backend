<?php

namespace App\Models;

use App\Enums\TypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use HasFactory;
    use softdeletes;

    protected $table = 'schools';

    protected $fillable = ['name', 'cnpj', 'city', 'uf', 'type', 'email', 'phone', 'registrant_id'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'name' => 'string',
        'cnpj' => 'string',
        'city' => 'string',
        'uf' => 'string',
        'type' => 'string',
        'email' => 'string',
        'phone' => 'string'
    ];
}
