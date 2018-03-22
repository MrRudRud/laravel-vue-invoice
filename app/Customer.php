<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    Protected $fillable = [
        'firstname', 'lastname', 'email', 'address'
    ];

    Protected $appends = ['text'];

    public function getTextAttribute(){
        return $this->attributes['firstname'].'-'.$this->attributes['lastname'];
    }
}
