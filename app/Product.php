<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [

        'id',
        'name',
        'image',
        'description',
        'price'

    ];

    protected $dates = [

        'deleted_at'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
