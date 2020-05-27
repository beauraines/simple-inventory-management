<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name', 'uom_id', 'description', 'class_of_supply_id',
    ];

    public function uom()
    {
        return $this->belongsTo(Uom::class);
    }
}
