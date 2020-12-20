@extends('layouts.admin')

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Tambah Penyakit</h3>

							<br>
							<form action="/penyakit" enctype="multipart/form-data" method="post">
								@csrf
								<div class="container">
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Kode Penyakit : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="kodepenyakit" class="form-control" style="font-size: 12px;" required="required">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Nama Penyakit : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="namapenyakit" class="form-control" style="font-size: 12px;" required="required">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Penanganan Awal : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="keterangan" class="form-control" style="font-size: 12px;" required="required">
										</div>
										</div>
									</div>
									<br>
									{{-- <button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #3EA8FF; border-color: #3EA8FF;">Simpan</button>
									<a href="/penyakit" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a> --}}
									<div class="row">
										<button type="submit" class="btn btn-primary">Tambah</button>
										<a href="/penyakit" class="btn btn-primary">Batal</a>
										{{-- <a href="/penyakit" class="btn btn-primary" style="float: right;" >Kembali</a> --}}
									</div>
								</div>
							</form>
						</div>	
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

@endsection