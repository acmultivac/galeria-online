<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comerciante extends Model 
{
    protected $table = 'comerciantes';
    public $timestamps = false; 
    protected $fillable = ['nome', 'desc_com', 'nome_img'];
    

}