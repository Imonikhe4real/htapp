<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChemistryController extends Controller
{
    public function index()
    {
        return view('chemistry');
    }
}
