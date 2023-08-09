<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function outputFunction()
    {
        dd("hello");
    }

    public function compactList()
    {
        // return view('compactTest', ['message' => 'hello this is testing message']);
        $message = "hello this is compact testing message";
        $error = "this is error message";
        $name = "my name is aye aye";
        return view('compactTest', compact('message', 'error', 'name'));
    }
}
