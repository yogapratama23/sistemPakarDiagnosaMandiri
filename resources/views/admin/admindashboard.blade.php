@extends('layouts.admin')

@section('content')
<div class="row tile_count">
    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
    <div class="count">{{ App\Models\User::count()}}</div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Gejala</span>
    <div class="count blue">{{ App\Models\Gejala::count()}}</div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Penyakit</span>
    <div class="count">{{ App\Models\Penyakit::count()}}</div>
    </div>
@endsection
