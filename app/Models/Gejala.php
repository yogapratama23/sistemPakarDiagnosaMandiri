<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gejala extends Model
{
    protected $guarded = [];

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }

    public function nilaicf()
    {
        return $this->hasOne(NilaiCF::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tkuser()
    {
        return $this->hasOne(Tkuser::class);
    }

    public function scopeGetlistbyid($gejala)
    {
        return $query = DB::table('gejalas')
                                ->select(['id', 'kodegejala', 'namagejala'])
                                ->where('id', array([$gejala]))
                                ->pluck('id');
                                // ->get();
    }

}
