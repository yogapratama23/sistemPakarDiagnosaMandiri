@extends('layouts.admin')

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<h3>Daftar Penyakit</h3>

			<br>
			<a href="/penyakit/create" class="btn btn-primary" style="border-radius: 0px; font-size: 12px; background:#3EA8FF; border-color: #3EA8FF;"><i class="fa fa-plus-circle"></i> Tambah Penyakit</a>
			@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
			@endif
				
			
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>NO</th>
						<th>Kode Penyakit</th>
						<th>Nama Penyakit</th>
						<th>Penanganan Awal/Pencegahan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($penyakit as $penyakit)
					<tr>
						
					<td>{{ $loop->iteration }}</td>
					<td>{{ $penyakit->kodepenyakit }}</td>
					<td>{{ $penyakit->namapenyakit }}</td>
					<td>{{ $penyakit->keterangan }}</td>
					<td  style="text-align: center; width: 200px;">
						<div style="display: flex;">
							<a href="{{ route ('penyakit.edit', $penyakit->id)}}" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677B; border-color: #51677B;"><i class="fa fa-edit"></i>Edit</a>
							<form method="post" action="{{ route('penyakit.destroy', $penyakit->id) }}">					
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