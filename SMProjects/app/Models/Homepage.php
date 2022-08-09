<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;
    protected $table='movie';
    public $primaryKey='movie_id';
    public $timestamps=false;
    protected $filltable=['movie_name','movie_description','release_date','director','main_character','price','movie_img','category_id'];

    public function category(){
        return $this->belongsTo('App\Models\Category','category_id','category_id');
    }
}
