<?php

namespace App;

use MongoQuent;

abstract class MongoModel extends MongoQuent
{
    //toda clase que extienda de esta utilizara como base de datos MongoDB y sus funciones estaran regidas por
    //la documentacion de https://github.com/jenssegers/laravel-mongodb


    protected $connection = 'mongodb';




}
