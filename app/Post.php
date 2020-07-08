<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Campos se van a permitir escribir en la base de datos
	protected $fillable =['title','body'];
}