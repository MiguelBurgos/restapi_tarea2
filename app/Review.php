<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['reviewer_name','title','content','review_created_at'];

    public function product(){
        return $this->belongsTo('App\Product');
    }

}
