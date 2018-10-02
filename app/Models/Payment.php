<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    protected $guarded = [];

    /**
     * Get the order of payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
