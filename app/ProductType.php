<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;


class ProductType extends Pivot
{
    protected $table = 'product_types';

    protected $fillable = ['product_id', 'type_id'];
}
