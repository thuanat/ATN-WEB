<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='category';
    public $primaryKey='category_id';
    public $timestamps=false;
    protected $filltable=['category_name','category_description',];
}
