<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Principal extends Model
{
    //
    protected $table = "principales";
    protected $fillable = [
        'title', 'contenido', 'descripcion','expiracion','imagen_id',
    ];
   
    public function imagen()
    {
        return $this->belongsTo('App\Imagen');
    }

}
