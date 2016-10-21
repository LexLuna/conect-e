<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Principal extends Model
{
    //
    use Sluggable;
    protected $table = "principales";
    protected $fillable = [
        'title', 'contenido', 'descripcion','expiracion','imagen_id',
    ];
   
    public function imagen()
    {
        return $this->belongsTo('App\Imagen');
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
