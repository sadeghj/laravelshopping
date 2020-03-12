<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
    public function Subcategorys(){
        return $this->hasMany('App\Model\Subcategory');
    }
}
