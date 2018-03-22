<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    Protected $fillable = [
        'description', 'unit_price'
    ];

    Protected $appends = ['text'];

    public function getTextAttribute(){
        return $this->attributes['item_code']. '-' . $this->attributes['description']; 
    }
}
