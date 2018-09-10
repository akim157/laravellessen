<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        print __METHOD__;
    }
    
    public function getCreate() {
//        print __METHOD__;
        print route('pages.create');
    }
}
