<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class packageController extends Controller
{
    public function index()
    {
        return view('packages');
    }
    public function add_package()
    {
        return view('add_package');
    }
    public function store_package()
    {
        return view('add_package');
    }
}
