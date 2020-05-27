<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uom extends Model
{
    protected $fillable = ['uom', 'description'];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
