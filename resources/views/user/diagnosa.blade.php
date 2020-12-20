@extends('layouts.user')

<section id="kontak" class="call-to-action-area section-gap " style="background-image: -webkit-linear-gradient(0deg, #ffffff 0%, #ffffff 100%) !important;" >
<form action="/diagnosa" method="POST">
    @csrf
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-6">
                    <div class="title text-center">
                        <h2 style="margin-bottom: 0px;">Diagnosa Mandiri</h2><br>
                        <p>Halaman ini adalah halaman diagnosa, Silahkan memilih gejala dengan cara mencentang beberapa pilihan dibawah ini sesuai dengan gejala yang anda rasakan saat ini.</p>
                    </div>
                </div>
            </div>
            
            <div class="container">
                @foreach ($gejalas as $gejala)
                    <input type="checkbox" name="gejala[]" value="{{ $gejala->id }}"> {{ $gejala->kodegejala }} - {{ $gejala->namagejala }} <br>
                    {{-- <input type="number" name="nilaiuser[]" step=".01" id={{$gejala->id}}><br> --}}
                @endforeach
            </div>
                
             
            <br>
		    <div class="row d-flex justify-content-center">
			    <div class="col-md-12" style="float: left; padding: 0;">
				    <button type="submit" class="btn main-btn" style="background-color: #41C1FF;  border-radius: 0px;">Proses</button>
			    </div>
		    </div>       
        </div>
    </form>
</section>