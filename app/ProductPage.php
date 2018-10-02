<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductPage extends Model
{
    public $products;
    public $product;
    public $search_key;
    public $is_edit = false;
}