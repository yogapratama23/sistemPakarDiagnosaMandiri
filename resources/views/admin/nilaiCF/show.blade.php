@extends('layouts.admin')

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<h3>Detail Nilai CF</h3>
			@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
			@endif

			<br>				
			
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Gejala</th>
						<th>Penyakit</th>
						<th>MD</th>
						<th>MB</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					
					<tr>
					<td>{{ $nilaicf->gejala->namagejala }}</td>
					<td>{{ $nilaicf->penyakit->namapenyakit }}</td>
					<td>{{ $nilaicf->md }}</td>
					<td>{{ $nilaicf->mb }}</td>
					<td  style="text-align: center; width: 200px;">
					<a href="{{ route ('nilaicf.edit', $nilaicf->id)}}" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677B; border-color: #51677B;"><i class="fa fa-edit"></i>Edit</a>
					<form method="post" action="{{ route('nilaicf.destroy', $nilaicf->id) }}">					
						@csrf
						@method('DELETE')
					
						<button type="submit" class="btn btn-danger btn-sm" style="border-radius: 0px;" onclick="javasciprt: return confirm('Apakah anda yakin ?')">Delete</button>
					</form>
					</td>

					</tr>
					
					
				</tbody>
			</table>
		</div>
	</div>
</div>
    
@endsection