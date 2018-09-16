<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
class PublicController extends Controller
{
	// Get the public pages
    public function publicPages()
    {
    	return view('public-pages.welcome');
    }
}
