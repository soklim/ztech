<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class his_ordering extends Model
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
