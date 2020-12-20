<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitsController extends Controller
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
    public function index(Request $request)
    {
        $penyakit = Penyakit::all();
        return view('admin.penyakit.index', compact('penyakit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penyakit.create');
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
            'kodepenyakit' => 'required',
            'namapenyakit' => 'required',
            'keterangan' => 'required',
        ]);
        Penyakit::create($request->all());
        
        return redirect('/penyakit')->with('status', 'Penyakit Berhasil Ditambahkan');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function show(Penyakit $penyakit)
    {
        // $penyakit = Penyakit::find($id);
        return view('admin.penyakit.show', compact('penyakit'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function edit(Penyakit $penyakit)
    {
        return view('admin.penyakit.edit', compact('penyakit'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $penyakit = Penyakit::findOrFail($id);
        $penyakit->fill($request->all());
        $penyakit->update();

        return redirect()->route('penyakit.index', $penyakit)->with('status', 'Penyakit Berhasil Diubah');
    }
        
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Penyakit  $penyakit
         * @return \Illuminate\Http\Response
         */
    public function destroy($id)
    {
        $penyakit = Penyakit::find($id);
        $penyakit->delete();

        // return redirect()->route('penyakit.destroy', $penyakit)->with('status', 'Penyakit Berhasil DiHapus');
        return redirect('/penyakit')->with('status', 'Penyakit Berhasil DiHapus');
    }
}
