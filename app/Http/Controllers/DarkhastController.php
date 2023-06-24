<?php

namespace App\Http\Controllers;

use App\Models\Anbar;
use Illuminate\Http\Request;

class DarkhastController extends Controller
{
    public function add() {
        $anbars= Anbar::select('name','id')->get();
        return view('darkhast.create',['anbars'=>$anbars]);
    }
}
