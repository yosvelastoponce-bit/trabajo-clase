<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model,SoftDeletes};

class Comentario extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function estudiante() {
     
        return $this->belongsTo(Estudiante::class);
    }
}
