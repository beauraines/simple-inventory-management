<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassOfSupply extends Model
{
    protected $fillable = ['class', 'description'];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
