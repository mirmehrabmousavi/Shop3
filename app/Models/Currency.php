<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function amount()
    {
        return $this->amount;
    }

    public function prices()
    {
        return $this->hasManyThrough(Price::class, Product::class)->withTrashed();
    }
}
