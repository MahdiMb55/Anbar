<?php

namespace App\Http\Controllers;

use App\Models\Anbar;
use App\Models\Kala;
use Illuminate\Http\Request;

class KalaController extends Controller
{
    public function index(Request $request) {
        $kalas = Kala::paginate(10);
        return view('kala.index',['kalas'=>$kalas]);
    }

    public function add() {
        $anbars= Anbar::select('name','id')->get();
        return view('kala.create',['anbars'=>$anbars]);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => "required|string|min:3",
            'anbar_id' => "required|string",
            'vahed' => "required|string|min:2"
        ]);

        Kala::create($request->all());

        return redirect()->back()->with('message', 'با موفقیت ثبت شد !');

    }
}
