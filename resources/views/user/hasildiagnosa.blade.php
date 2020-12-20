@extends('layouts.user')

<section class="call-to-action-area section-gap " style="background-image: -webkit-linear-gradient(0deg, #ffffff 0%, #ffffff 100%) !important; padding:60px 120px;" id="printTable" >
<div class="pt-5">
    <h2>Hasil Diagnosa {{Auth::user()->name}}</h2>
</div>
    <div class="box box-warning">
            <div class="box-header with-border">
                <h6 class="box-title">Gejala yang telah anda pilih</h6>
            </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                <table id="tbl-list" class="table table-bordered">
                    <tr>
                        <th width="200px" style="background: #67CDFF; color: white">Kode Gejala</th>
                        <th style="background: #67CDFF; color: white">Nama Gejala</th>
                    </tr>
                    <tr>
                        @foreach ($inputgejala as $value)
                        <tr>    
                            <td>{{ $value->kodegejala }}</td>    
                            <td>{{ $value->namagejala }}</td>    
                        </tr>
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>
        <div class="box box-success">
            <div class="box-header with-border">
                <h6 class="box-title">Diagnosa Penyakit</h6>
            </div>
            <div class="box-body">
                <table id="tbl-list" class="table table-bordered">
                    <tr>
                        <th width="200px" style="background: #67CDFF; color: white">Kode Penyakit</th>
                        <th style="background: #67CDFF; color: white">Penyakit</th>
                        <th style="background: #67CDFF; color: white">Tingkat Kepercayaan</th>
                    </tr>
                    <tr>
                        @foreach ($penyakit as $value2)
                            @foreach($value2 as $value3)
                            <tr>
                                <td>{{ $value3['kodepenyakit'] }}</td>
                                <td>{{ $value3['namapenyakit'] }}</td>
                                <td>{{ $value3['kepercayaan'] }}%</td>
                            </tr>
                            @endforeach
                        @endforeach
                    </tr>
                </table>
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h6 class="box-title">Kesimpulan</h6>
                    </div>
                    <div class="box-body">
                        @if(sizeof($penyakit) > 0)
                        <p>
                            Berdasarkan gejala yang telah didapat, anda diprediksi mengidap penyakit <b>{{ $hasil['namapenyakit'] }}</b> dengan tingkat kepercayaan <b>{{ $hasil['kepercayaan']}}%</b><br>
                            {{ $hasil['keterangan'] }}.
                            <p style="font-style: bold; color: red; font-size: 13px;">
                                Jika anda mengalami gejala yang membutuhkan pertolongan secepatnya, segeralah berkunjung 
                                ke UPTD Puskesmas Suo-Suo atau Puskesmas terdekat dan patuhilah protokol kesehatan yang sedang berlaku.
                            </p>   
                        </p>
                        @else
                        <p>
                            Penyakit anda tidak dapat diprediksi karena tingkat kepercayaan yang dimiliki terlalu rendah
                        </p>
                        @endif
                    </div>
            </div>
                <div class="box-footer clearfix">
                    <a class="btn btn-sm btn-flat pull-right" style="background: #67CDFF; color: white;" href="{{route('diagnosa.form')}}">Diagnosa Ulang</a>
                    <button class="btn btn-sm btn-flat pull-right" style="background: #67CDFF; color: white; margin-right:10px;" onclick = "window.print()">Cetak</button> 
                </div>
        </div>
    
        
    </div>
</section>