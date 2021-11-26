<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comerciante extends Model 
{
    protected $table = 'comerciantes';
    public $timestamps = false; 
    protected $fillable = ['nome', 'nome_img'];
    

}