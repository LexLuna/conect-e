<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    //
    protected $table = "imagenes";
    protected $fillable = [
        'imagen', 'fecha',
    ];
    public function principal()
    {
        return $this->hasOne('App\Principal');
    }
}
