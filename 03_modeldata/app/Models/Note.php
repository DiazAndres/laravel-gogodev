<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use function Livewire\Volt\protect;

class Note extends Model
{
    // Cuando no se respetan las convenciones de Laravel, se debe de especificar el nombre de la tabla
    // Vinculacion al sistema de persistencia de datos
    protected $table = "notes";


    // * Fillable y guarded son mécanismos opuestos, por lo que se debe de elegir uno de los dos
    // Indicar los campos que se pueden modificar
    protected $fillable = ['title', 'description', 'deadline', 'done'];

    // Indicar los campos que no se pueden modificar, campos protegidos
    // protected $guarded = ['id', 'created_at', 'updated_at'];

    // * Casts es un array asociativo que permite especificar el tipo de dato que se espera en un campo
    // * En este caso se espera un booleano en el campo done y una fecha en el campo deadline
    protected $casts = [
        'done' => 'boolean',
        'deadline' => 'date'
    ];
    // * Para proteger los campos de la tabla, se debe de especificar los campos que no se desean mostrar
    // * En este caso se protege el campo password 
    protected $hidden = ['password'];
}
