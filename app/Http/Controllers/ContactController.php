<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function cpage(){
        return view('ContactPage');
    }


}
