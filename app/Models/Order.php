<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $guarded = [];

    /**
     * Get the products of order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }


    /**
     * Get the payments of order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
