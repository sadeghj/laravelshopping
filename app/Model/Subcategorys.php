<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Subcategorys extends Model
{
    protected $fillable = [
        'name','categoeyid'
    ];
    public function Categorys(){

        return $this->belongsTo('App\Model\Category');

    }
}
