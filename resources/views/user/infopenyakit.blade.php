@extends('layouts.user')

<section class="service-area section-gap" id="feature" style="background-color: #42d1ff;">
				<div class="container">
					<div class="row d-flex justify-content-center" >
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Informasi Penyakit</h1>
								<p style="color : black;">Informasi penyakit berikut merupakan hasil dari pengolahan data laporan 10 penyakit terbesar setiap bulannya
									di UPTD Puskesmas Suo-Suo dari bulan Januari sampai dengan Agustus 2020.</p>
							</div>
						</div>
					</div>						
					<div class="container-fluid">
						<div class="row">
							@foreach ($penyakits as $penyakit)
							<div class="col-lg-6  col-md-6 mb-30">
								<div class="single-service" style="background-color: white; padding: 20px;">
									<h4>{{$penyakit->namapenyakit}}</h4>	
									<span>{{$penyakit->keterangan}}</span>							
								</div>
							</div>
							@endforeach
						</div>																	
					</div>
				</div>	
			</section>