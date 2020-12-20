@extends('layouts.admin')

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Update Gejala</h3>

							<br>
						<form action="{{ route('gejala.update', $gejala->id)}}" method="post" enctype="multipart/form-data">
								@csrf
								@method('PATCH')
								<div class="container">
									<div class="row">
									<input type="hidden" name="id" value="{{ $gejala->id }}">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span >Kode gejala : </span>
										</div>
										<div class="col-md-12">
										<input type="text" name="kodegejala" class="form-control " style="font-size: 12px;" value="{{ $gejala->kodegejala }}" required="required">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Nama gejala : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="namagejala" class="form-control" style="font-size: 12px;" value="{{ $gejala->namagejala }}" required="required">
										</div>
									</div>
									<br>
									{{-- <button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677b; border-color: #51677b;">Update</button> --}}
									<button type="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677b; border-color: #51677b;">Update</button>
									<a href="/gejala" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a>
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