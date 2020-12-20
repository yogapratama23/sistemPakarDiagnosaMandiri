<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilaicf;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Support\Facades\DB;

class NilaicfsController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilaicf = Nilaicf::all();
        return view('admin.nilaicf.index', compact('nilaicf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $gejalas = Gejala::all();
        $penyakits = Penyakit::all();

        // dd($gejalas , $penyakits);

        return view('admin.nilaicf.create', compact('gejalas', 'penyakits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'gejala_id' => 'required',
            'penyakit_id' => 'required',
            'nilaipakar' => 'required',
            'nilaiuser' => 'required',
        ]);

        Nilaicf::create($request->all());
        
        return redirect('/nilaicf')->with('status', 'Nilai CF Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Nilaicf $nilaicf)
    {
        return view('admin.nilaicf.show', compact('nilaicf'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilaicf $nilaicf)
    {

        $gejalas = Gejala::all();
        $penyakits = Penyakit::all();
        return view('admin.nilaicf.edit', compact('nilaicf', 'gejalas', 'penyakits'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nilaicf = Nilaicf::findOrFail($id);
        $nilaicf->fill($request->all());
        $nilaicf->update();

        return redirect()->route('nilaicf.index', $nilaicf)->with('status', 'Nilai CF Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nilaicf = Nilaicf::find($id);
        $nilaicf->delete();

        // return redirect()->route('penyakit.destroy', $penyakit)->with('status', 'Penyakit Berhasil DiHapus');
        return redirect()->route('nilaicf.index', $nilaicf)->with('status', 'Nilai CF Berhasil DiHapus');
    }
}
