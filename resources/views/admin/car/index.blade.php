@extends('admin.layouts.app')

@section('content')

	<div class="container">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-6" align="left" style="vertical-align: center;">
						<h2>Mobil</h2>
					</div>
					<div class="col-6" align="right">
						<a href="{{ route('Admin.create_car') }}" class="btn btn-primary">Tambah Mobil</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<table id="car" class="display" style="width:100%">
					<thead>
						<tr>
							<td>No.</td>
							<td>Merk</td>
							<td>Plat</td>
							<td>Warna</td>
							<td>Tahun</td>
							<td>Harga</td>
							<td>Status</td>
							<td>Menu</td>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $dataa)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $dataa->merk }}</td>
								<td>{{ $dataa->plat }}</td>
								<td>{{ $dataa->warna }}</td>
								<td>{{ $dataa->tahun }}</td>
								<td>{{ $dataa->harga }}</td>
								<td>{{ $dataa->status }}</td>
								<td>
									<a href="{{ route('Admin.edit_car', ['id' => $dataa->id]) }}" class="btn btn-warning">Edit</a>
									<button onclick="del(this.value)" value="{{ $dataa->id }}" class="btn btn-danger">Delete</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		

		$(document).ready(function() {
			new DataTable('#car');
		});

		function del(val) {
	        
	        $.ajax({
	            type: "GET",
	            url: "{{ route('Admin.delete_car')}}",
	            data: {
	                id : val,
	            },
	            success: function(responses){  
					location.reload()
	            }
	        });

		}

		var success = '{{ Session::get('success') }}';
		if (success) {
			swal("Success!", success, "success");
		}

	</script>

@endsection