<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class PubblicController extends Controller
{

    public function index()
    {
        $brand = Brand::all();

        return view('brands.index', compact('brand'));
    }

    public function show(Brand $brand)
    {
        return view('brands.show', compact('brand'));
    }

}
