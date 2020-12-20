@extends('layouts.admin')

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<h3>Daftar Nilai CF</h3>

			<br>
			<a href="/nilaicf/create" class="btn btn-primary" style="border-radius: 0px; font-size: 12px; background:#3EA8FF; border-color: #3EA8FF;"><i class="fa fa-plus-circle"></i> Tambah Nilai CF</a>
			@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
			@endif
				
			
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>NO</th>
						<th>Gejala</th>
						<th>Penyakit</th>
						<th>Nilai Pakar</th>
						<th>Nilai User</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					
					
					@foreach ($nilaicf as $nilaicf)
					<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $nilaicf->gejala->namagejala }}</td>
					<td>{{ $nilaicf->penyakit->namapenyakit }}</td>
					<td>{{ $nilaicf->nilaipakar }}</td>
					<td>{{ $nilaicf->nilaiuser }}</td>
					<td style="text-align: center; width: 200px; ">
						<div style="display: flex;">
							<a href="{{ route ('nilaicf.edit', $nilaicf->id)}}" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677B; border-color: #51677B;"><i class="fa fa-edit"></i>Edit</a>
							<form method="post" action="{{ route('nilaicf.destroy', $nilaicf->id) }}">					
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger btn-sm" style="border-radius: 0px;" onclick="javasciprt: return confirm('Apakah anda yakin ?')">Delete</button>
							</form>
						
						</div>
					</td>
					</tr>
					@endforeach
					
					
				</tbody>
			</table>
		</div>
	</div>
</div>
    
@endsection