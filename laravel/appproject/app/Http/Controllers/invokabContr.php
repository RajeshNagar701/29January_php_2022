<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class invokabContr extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        echo "This is --invokable controller in this have autocall function __constructor";
    }
}
