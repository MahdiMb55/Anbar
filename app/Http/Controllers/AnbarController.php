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

    public function delete($id){
        $anbar = Anbar::findorfail($id);
        $anbar->delete();
        return redirect()->back()->with('message', 'با موفقیت حذف شد !');
    }

    public function edit($id){
        $anbar = Anbar::findorfail($id);
        return view('Anbar.edit',['anbar'=>$anbar]);
    }

    public function update(Request $request, $id){
        $anbar = Anbar::findorfail($id);
        $anbar->update($request->all());
        return redirect()->route('anbar.index')->with('message', 'با موفقیت ویرایش شد !');
    }
}
