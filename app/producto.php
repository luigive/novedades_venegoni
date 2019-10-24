<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
     protected $table = 'producto';
     protected $fillable = ['nombre','precio','cantidad','foto','id_categoria'];
     protected $guarded = ['id'];

      public function categorias_relacion()
    {
        return $this->belongsTo(categoria::class, 'fk_categoria_producto');
    }

}


