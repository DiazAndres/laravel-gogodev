<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];


    // ! Para crear la relacion muchos a muchos es necesario de un tabla intermedia
    // ! que se llama role_user
    // ! Por convención laravel toma el nombre de las tablas en orden alfabético separados por un _ y en singular
    // ! Por eso el nombre de role_user
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
        // return $this->belongsToMany(User::class);
    }
}
