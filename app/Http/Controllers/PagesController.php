<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function front()
    {
        return view('front');
    }

    public function investigators()
    {
        return view('/decks/investigator');
    }

}
