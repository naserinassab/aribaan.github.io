<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllasal extends Controller
{
    public function index()
    {
        return view('home');
    }