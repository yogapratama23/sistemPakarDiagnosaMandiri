<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalasController extends Controller
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
        $gejala = Gejala::all();
        return view('admin.gejala.index', compact('gejala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gejala.create');
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
            'kodegejala' => 'required',
            'namagejala' => 'required',
        ]);
        Gejala::create($request->all());
        
        return redirect('/gejala')->with('status', 'Gejala Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function show(Gejala $gejala)
    {
        return view('admin.gejala.show', compact('gejala'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function edit(Gejala $gejala)
    {
        return view('admin.gejala.edit', compact('gejala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gejala = Gejala::findOrFail($id);
        $gejala->fill($request->all());
        $gejala->update();

        return redirect()->route('gejala.index', $gejala)->with('status', 'Gejala Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gejala = Gejala::find($id);
        $gejala->delete();

        return redirect('/gejala')->with('status', 'Gejala Berhasil DiHapus');
    }
}
