<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $guarded = [];

    /**
     * Get the products of a tag
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
