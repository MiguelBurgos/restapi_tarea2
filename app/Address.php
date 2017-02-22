<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['address','city','state','country','post_code'];

    public function seller(){
        return $this->hasOne('App\Seller');
    }
}
