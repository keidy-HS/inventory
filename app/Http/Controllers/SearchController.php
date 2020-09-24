<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
        public function store(){
        $result = request()->input("q");
        dd(request("q"));
    }
}
