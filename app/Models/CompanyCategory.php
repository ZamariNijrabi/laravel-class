<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CompanyCategory extends Model
{

    protected $guarded = [];

    /**
     * Get the companies of this category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
