<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // *Relación uno a uno
    // public function phone(): HasOne
    // {
    //     // * Si se respeta la convención de nombres de llaves foráneas
    //     // * basta con poner la clase con la que tiene relación
    //     // ! Si no se respeta la convención de nombres de llaves foráneas
    //     // ! se debe pasar como segundo argumento el nombre de la llave foránea
    //     // ! y el nombre de la llave primaria de la tabla con la que se tiene
    //     // ! la relación.
    //     // return $this->hasOne(Phone::class, 'user_id', 'id');
    //     return $this->hasOne(Phone::class);
    // }

    // *Relación uno a muchos
    // public function phones(): HasMany
    // {
    //     return $this->hasMany(Phone::class);
    // }

    // *Relación muchos a muchos
    // public function roles(): BelongsToMany
    // {
    //     // * Si se requieren los campos extras de la tabla intermedia
    //     // * se debe poner withPivot y pasar los campos que se requieren
    //     return $this->belongsToMany(Role::class)->withPivot('added_by');
    // }

    // public function phoneSim(): HasManyThrough
    // {
    //     return $this->hasManyThrough(Sim::class, Phone::class);
    // }

    // public function phoneSim(): HasOneThrough
    // {
    //     return $this->hasOneThrough(Sim::class, Phone::class);
    // }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
