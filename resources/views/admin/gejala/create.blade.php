@extends('layouts.admin')

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Tambah Gejala</h3>

							<br>
							<form action="/gejala" enctype="multipart/form-data" method="post">
								@csrf
								<div class="container">
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Kode Gejala : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="kodegejala" class="form-control" style="font-size: 12px;" required="required">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Nama Gejala : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="namagejala" class="form-control" style="font-size: 12px;" required="required">
										</div>
									</div>
									<br>
								</div>
									<br>
									{{-- <button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #3EA8FF; border-color: #3EA8FF;">Simpan</button>
									<a href="/penyakit" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a> --}}
									<div class="row">
										<button type="submit" class="btn btn-primary">Tambah</button>
										<a href="/gejala" class="btn btn-primary">Batal</a>
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