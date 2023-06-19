<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DarkhastController extends Controller
{
    public function add() {
        return view('darkhast.create');
    }
}
