<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item_image extends Model
{
    protected $fillable=[
        'item_id',
        'image',

    ];
    public function item(){
        return $this->belongsTo(Item::class,'item_id');
    }

    protected $casts = [
        'image' => 'array',
    ];
}
