<?php

namespace App;

use Appstract\Stock\HasStock;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasStock;

    protected $fillable = [
        'name', 'uom_id', 'description', 'class_of_supply_id',
    ];

    public function uom()
    {
        return $this->belongsTo(Uom::class);
    }

    public function class_of_supply()
    {
        return $this->belongsTo(ClassOfSupply::class);
    }
}
