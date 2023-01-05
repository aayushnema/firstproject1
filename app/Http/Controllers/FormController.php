<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function Form1Show()
    {
        return view('form1');
    }
    public function Form1(Request $request)
    {

    }
}
