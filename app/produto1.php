<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto1 extends Model
{
    protected $table = 'produto1s';
    protected $fillable = ['name', 'description', 'price', 'category_id', 'quantity'];
}
