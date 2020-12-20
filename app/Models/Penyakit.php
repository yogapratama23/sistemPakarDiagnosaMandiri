<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    

    protected $guarded = [];

    public function gejala()
    {
        return $this->hasMany(Gejala::class);
    }

    public function nilaicf()
    {
        return $this->hasMany(Nilaicf::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tkuser()
    {
        return $this->hasMany(Tkuser::class);
    }
}
