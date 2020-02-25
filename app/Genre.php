<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
