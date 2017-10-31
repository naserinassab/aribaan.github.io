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
    public function khavasasal()
    {
        return view('khavas asal');
    }
    public function shop()
    {
        return view('shop');
    }
    public function shop1()
    {
        return view('shop1');
    }
    public function moarefi()
    {
        return view('moarefi-m');
    }
    public function darbarema()
    {
        return view('dar-ma');
    }
    public function selectshop()
    {
        return view('select');
    }

}
