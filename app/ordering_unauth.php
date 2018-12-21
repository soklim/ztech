<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ordering_unauth extends Model
{
    //
    protected $fillable=[

        'id',
        'pro_code',
        'price',
        'cus_name',
        'phone',
        'address',
        'order_date'

    ];
}
