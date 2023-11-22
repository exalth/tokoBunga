<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $katalog = Katalog::all();

        return view('katalog.index', compact(['katalog']));
    }
    public function create()
    {
        return view('katalog.create');
    }
    public function store(Request $request)
    {
        if ($request->hasFile('foto')) {
            $photo = $request->file('foto');
            $filename = date('Ymd') . '_' . $photo->getClientOriginalName();

            // Pindahkan file ke direktori penyimpanan publik
            $photo->storeAs('product', $filename, 'public');

            // Simpan nama file ke dalam atribut 'foto' pada objek request
            $request->merge(['foto' => $filename]);
        }

        // Buat instance Katalog dengan data dari objek request
        Katalog::create($request->except('_token', 'submit'));

        return redirect('/katalog');
    }


    public function edit($id)
    {
        $katalogWhere = Katalog::find($id);
        return view('katalog.edit', compact(['katalogWhere']));
        // dd($katalogWhere);
    }
    public function update($id, Request $request)
    {
        $request_exception = $request->except('_token', 'submit');
        $katalogWhere = Katalog::find($id);
        $katalogWhere->update($request_exception);
        return redirect('/katalog');
    }
    public function destroy($id, Request $request)
    {
        // dd($id);
        $request_exception = $request->except('_token', 'submit');
        $katalogWhere = Katalog::find($id);
        $katalogWhere->delete($request_exception);
        return redirect('/katalog');
    }
}
