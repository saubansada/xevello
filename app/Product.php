<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    public $primaryKey = "id";
    public $timestamps = true;
}
