<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilaicf;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

    }
    
    
   
}
