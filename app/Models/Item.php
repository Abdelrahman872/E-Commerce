<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable=[
        'title',
        'description',
        'price',
        'discount',
        'price_disc',
        'made_in',
        'details',
        'image',
        'cat_id',


    ];
    public function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }
}
