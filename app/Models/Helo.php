<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Helo extends Model
{
 static $blog=[
     [
            "info"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo dolores aut dicta
             incidunt. Vero, quos."
     ]
];
        public static function all(){
            return this->$blog;
        }


};
