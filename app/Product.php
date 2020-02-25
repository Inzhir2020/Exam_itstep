<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed pivot
 * @property mixed price
 */
class Product extends Model
{

    public function genre()

    {
        return $this->belongsTo(Genre::class);
    }

    public function getPriceForCount() {
        if (!is_null($this->pivot)) {
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }


}
