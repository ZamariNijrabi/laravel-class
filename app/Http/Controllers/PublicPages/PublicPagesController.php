<?php

namespace App\Http\Controllers\PublicPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicPagesController extends Controller
{
    public function index()
    {
        $uuid = (string) Str::uuid();

        echo $uuid;
        return 'welcome page';
    }

    public function register(Request $request)
    {
        return $request->name;
    }


    public function user($id = 1)
    {
        return $id;
    }
}
