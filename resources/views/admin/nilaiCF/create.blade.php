@extends('layouts.admin')

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Tambah Nilai CF</h3>

							<br>
                            <form action="/nilaicf" method="POST">
                                @csrf

								<div class="container">
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Gejala : </span>
										</div>
									</div>
										<select name="gejala_id" class="form-control " style="font-size: 12px;" required>
                                            <option value="">-Pilih-</option>
                                            @foreach ($gejalas as $gejala)
                                                <option value="{{ $gejala->id }}">{{ $gejala->namagejala}}</option>
                                                @endforeach										
                                            </select>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-2" style="margin-bottom: 5px;">
                                                    <span>Nama Penyakit : </span>
                                                </div>
                                            </div>
                                            <select name="penyakit_id" class="form-control " style="font-size: 12px;" required>
                                                <option value="">-Pilih-</option>
                                                @foreach ($penyakits as $penyakit)
                                                    <option value="{{ $penyakit->id }}">{{ $penyakit->namapenyakit}}</option>
                                                @endforeach
										    </select>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Nilai Pakar : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="nilaipakar" class="form-control" style="font-size: 12px;" required="required">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Nilai User : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="nilaiuser" class="form-control" style="font-size: 12px;" required="required">
										</div>
									</div>
									<br>
									<button type="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #3EA8FF; border-color: #3EA8FF;">Simpan</button>
									<a href="/create" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a>
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