<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usermanagement extends Model
{
    use HasFactory;
    protected $table='users';
    public $primaryKey='id';
    public $timestamps=false;
    protected $filltable=['name','email','password','role'];
}
