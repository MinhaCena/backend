<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
    use HasFactory;


    protected $table = 'registrant';

    protected $fillable = ['name', 'email', 'role', 'whatsapp'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'role' => 'string',
        'whatsapp' => 'string'
    ];

    public function schools()
    {
        return $this->hasMany(School::class, 'id_registrant');
    }
}
