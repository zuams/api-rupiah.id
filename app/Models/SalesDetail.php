<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesDetail extends Model
{
    protected $fillable = [
    	'sales_id', 'product_code', 'product_amount', 'sell_price', 'subtotal_price'
    ];

    public function sales(){
    	return $this->belongsTo('App\Models\Sales', 'sales_id');
    }

    public function product(){
        return $this->belongsTo('App\Models\Product', 'product_code');
    }
}
