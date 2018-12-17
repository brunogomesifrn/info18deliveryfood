<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    function categoria_produto(){
    	return $this->belongsTo('App\Categoria_produto');
    }
}
