<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use App\Models\User;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Nilaicf;
use App\Models\Hasildiagnosa;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function compare($a, $b)
    {
        return ($a[0]["kepercayaan"] > $b[0]["kepercayaan"]) ? -1 : 1;
    }

    public function infopenyakit()
    {
        $penyakits = Penyakit::all();
        // dd($penyakits);
        return view('user.infopenyakit', compact('penyakits'));
    }

    public function diagnosa()
    {
        $gejalas = Gejala::all();      
        return view('user.diagnosa', compact('gejalas'));      
    }
    	
	public function hasil(Request $request)
	{

        if ($request->has('gejala')) 
        {
            $gejala = collect($request->input('gejala'));
            $inputgejala = Gejala::select(['id', 'kodegejala', 'namagejala'])
                                            ->whereIn('id', $gejala)
                                            ->get();
            $listpenyakit = Nilaicf::distinct()
                                     ->select(['penyakit_id', 'kodepenyakit', 'namapenyakit', 'keterangan'])
                                     ->join('penyakits', 'penyakits.id', '=', 'nilaicfs.penyakit_id')
                                     ->whereIn('gejala_id', $gejala)
                                     ->get();
            
            $penyakit = array();
            $i = 0;
            foreach ($listpenyakit as $key=> $value)
            {
                $listgejala = Nilaicf::select(['gejala_id', 'nilaiuser', 'nilaipakar'])
                                        ->where('penyakit_id', '=', $value->penyakit_id)
                                        ->whereIn('gejala_id', $gejala)
                                        ->whereNotNull('gejala_id')
                                        ->get();
                $combineCFmb = 0;
                $combineCFmd = 0;
                $CFBefore = 0;
                $j = 0;

                foreach($listgejala as $key=> $value2)
                {
                    $j++;
                    if($j==1)
                    {
                        $combineCFmb = $value2->nilaiuser;
                        $combineCFmd = $value2->nilaipakar;
                        $combinehasil = $combineCFmb - $combineCFmd;
                    }
                    else
                    {
                        // $combineCFmb = ($combineCFmb*$combineCFmd) + (($value2->mb*$value2->md) * (1 - ($combineCFmb*$combineCFmd)));
                        $combineCFmd = $combineCFmd + ($value2->nilaipakar * (1 - $combineCFmd));

                        $combinehasil = $combineCFmd;
                    }
                }

                if($combinehasil)
                {
                    $penyakit[$i] = array([
                        'kodepenyakit' => $value->kodepenyakit,
                        'namapenyakit' => $value->namapenyakit,
                        'kepercayaan' => $combinehasil * 100,
                        'keterangan' => $value->keterangan,
                        'user_id' => Auth::id(),
                    ]);
                    $i++;
                }
            }
            usort($penyakit, array($this, "compare"));
            $data["listpenyakit"] = $penyakit;
            $hasil = array(
                'kodepenyakit' => $penyakit[0][0]['kodepenyakit'],
                'namapenyakit' => $penyakit[0][0]['namapenyakit'],
                'kepercayaan' => $penyakit[0][0]['kepercayaan'],
                'keterangan' => $penyakit[0][0]['keterangan'],
                'user_id' => $penyakit[0][0]['user_id'],
            );
            $hasildiagnosa = Hasildiagnosa::create([
                'user_id' => $hasil['user_id'],
                'kode' => $hasil['kodepenyakit'],
                'nama' => $hasil['namapenyakit'],
                'kepercayaan' => $hasil['kepercayaan'],
                'penanganan' => $hasil['keterangan']
            ]);

            // dd($);
            return view('user.hasildiagnosa', compact('inputgejala', 'penyakit', 'hasil'));

        } 
        else 
        {
            $gejalas = Gejala::all();
            return view('user.diagnosa', compact('gejalas'));

        }
        
    }
    
}
