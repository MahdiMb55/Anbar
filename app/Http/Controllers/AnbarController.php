<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anbar;
class AnbarController extends Controller
{

    public function index(Request $request) {
        $anbars = Anbar::paginate(10);
        return view('Anbar.index',['anbars'=>$anbars]);
    }

    public function add() {
        return view('Anbar.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => "required|string|min:3"
        ]);

        Anbar::create($request->all());

        return redirect()->back()->with('message', 'با موفقیت ثبت شد !');

    }
}
