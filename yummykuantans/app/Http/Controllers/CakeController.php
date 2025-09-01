<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    public function index()
    {
        $cakes = Cake::where('is_available', true)->get();
        return view('cakes.index', compact('cakes'));
    }

    public function show(Cake $cake)
    {
        return view('cakes.show', compact('cake'));
    }
}
