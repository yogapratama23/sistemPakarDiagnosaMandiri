<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Nilaicf extends Model
{
    

    protected $guarded = [];

    public function gejala()
    {
        return $this->belongsTo(Gejala::class);
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tkuser()
    {
        return $this->hasOne(Tkuser::class);
    }

    // public function daftarNilaicf($limit, $start = 0, $q = null)
    // {

	// 	return $this->db->select('*, nilaicf.id AS gpid ')
	// 					->from('gejala_penyakit')
	// 					->join('gejala', 'gejala.id = gejala_penyakit.gejala_id ')
	// 					->join('penyakit', 'penyakit.id = gejala_penyakit.penyakit_id ')
	// 					->order_by('gejala_penyakit.id', 'DESC')
    //                     ->limit($limit, $start)
	// 					->get()
	// 					->result_array();
	// }

    public function scopeGetlistnilaicf()
    {
        return $query = DB::table('nilaicfs')
                            ->select('nilaicfs.*')
                            ->join('gejalas', 'gejalas.id', '=', 'nilaicfs.gejala_id')
                            ->join('penyakits', 'penyakits.id', '=', 'nilaicfs.penyakit_id')
                            ->get()
                            ->toArray();
    }

    public function scopeGetbygejala($gejala)
    {
        return $query = DB::table('nilaicfs')
                            ->distinct()
                            ->select(['penyakit_id', 'kodepenyakit', 'namapenyakit', 'keterangan'])
                            ->join('penyakits', 'penyakits.id', '=', 'nilaicfs.penyakit_id')
                            ->where('gejala_id', '>', 0)
                            ->get();
    }

    public function scopeGetgejalabypenyakit($id, $gejala = null)
    {
        return $query = DB::table('nilaicfs')
                                ->select(['gejala_id', 'mb', 'md'])
                                ->where('penyakit_id', '=', $id);
        if ($gejala != null) {
            $query = $query." and gejala_id in (".$gejalas.")";
        }
        $query = $query."order by gejala_id";              
    }

}
