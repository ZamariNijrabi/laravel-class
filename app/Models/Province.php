<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Province extends Model
{

    protected $guarded = [];

    /**
     * Get the companies
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function companies()
    {

        return $this->hasMany(Company::class);
    }
}
