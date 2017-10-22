<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllmaster extends Controller
{
    public function master()
    {
        return view('master');
    }

    public function testmaster()
    {
        return view('test-master');
    }
    public function tabliq()
    {
        return view('tabliq');
    }
}
