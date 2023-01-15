<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $table = 'school';

    protected $fillable = ['name', 'cnpj', 'city', 'uf', 'type', 'email', 'phone', 'id_registrant'];

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
