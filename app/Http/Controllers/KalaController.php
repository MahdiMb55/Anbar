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
            'name' => "required|string|min:3|unique:kalas",
            'anbar_id' => "required|string",
            'vahed' => "required|string|min:2"
        ]);

        Kala::create($request->all());

        return redirect()->back()->with('message', 'با موفقیت ثبت شد !');
    }

    public function delete($id){
        $kala = Kala::findorfail($id);
        $kala->delete();
        return redirect()->back()->with('message', 'با موفقیت حذف شد !');
    }

    public function edit($id){
        $kala = Kala::findorfail($id);
        $anbars= Anbar::select('name','id')->get();
        return view('kala.edit',['kala'=>$kala,'anbars'=>$anbars]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => "required|string|min:3|unique:kalas",
            'anbar_id' => "required|string",
            'vahed' => "required|string|min:2"
        ]);
        $kala = Kala::findorfail($id);
        $kala->update($request->all());
        return redirect()->route('kala.index')->with('message', 'با موفقیت ویرایش شد !');
    }
}
