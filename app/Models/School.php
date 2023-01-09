<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'cnpj',
        'city',
        'state',
        'type',
        'email',
        'phone',
        'registrant_id',
    ];

    public function registrant()
    {
        return $this->belongsTo(Registrant::class);
    }
}
