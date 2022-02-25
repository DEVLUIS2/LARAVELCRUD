<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use App\Models\Pizza;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('Home');
    }

    public function pizza()
    {
        $pizza = Pizza::all();
        return view('pizza',compact('pizza'));
    }

    public function drink()
    {
        $drink = Drink::all();
        return view('Drink',compact('drink'));
    }
}
