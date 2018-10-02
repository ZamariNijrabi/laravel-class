<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $guarded = [];


    //get the owner of companies
    public function user(){
        return $this->belongsTo(User::class);
    }
    // get the category of company
    public function category(){
        return $this->belongsTo(CompanyCategory::class);
    }
    //get the products of company
    public function products(){
        return $this->hasMany(Product::class);
    }

    // get the Province of company
    public function province(){
        return $this->belongsTo(Province::class);
    }
}
