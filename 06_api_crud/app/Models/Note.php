<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at'];
}
