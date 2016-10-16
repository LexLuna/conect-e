<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Principal extends Model
{
    //
    protected $table = "principales";
    protected $fillable = [
        'title', 'contenido', 'decripcion','expiracion','id_imagen',
    ];
   
    public function imagen()
    {
        return $this->belongsTo('App\Imagen');
    }

}
