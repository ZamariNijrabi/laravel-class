<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $guarded = [];

    /**
     * Get the owner of company
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the category of the company
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(CompanyCategory::class);
    }

    /**
     * Get the products of the company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get the province of company
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
