<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{

    protected $guarded = [];

    /**
     * Get the products of a category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
