@extends('admin.layouts.app')

@section('content')

	<div class="container">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<h2>Edit Mobil</h2>
				</div>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('Admin.update_car') }}">
					@csrf
					<input type="hidden" name="id" value="{{ $data->id }}">
					<!-- <div class="mb-3">
					    <label for="fotomobil" class="form-label">Foto Mobil</label>
					    <input type="text" class="form-control" name="foto" id="fotomobil">
					</div> -->
					<div class="mb-3">
					    <label for="merkmobil" class="form-label">Merk Mobil</label>
					    <input type="text" class="form-control" name="merk" id="merkmobil" value="{{ $data->merk }}">
					</div>
					<div class="mb-3">
					    <label for="platmobil" class="form-label">Plat Mobil</label>
					    <input type="text" class="form-control" name="plat" id="platmobil" value="{{ $data->plat }}">
					</div>
					<div class="mb-3">
					    <label for="warnamobil" class="form-label">Warna Mobil</label>
					    <input type="text" class="form-control" name="warna" id="warnamobil" value="{{ $data->warna }}">
					</div>
					<div class="mb-3">
					    <label for="tahunmobil" class="form-label">Tahun Mobil</label>
					    <input type="Number" class="form-control" name="tahun" id="tahunmobil" value="{{ $data->tahun }}">
					</div>
					<div class="mb-3">
					    <label for="hargamobil" class="form-label">Harga Mobil</label>
					    <input type="Number" class="form-control" name="harga" id="hargamobil" value="{{ $data->harga }}">
					</div>
  					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>

@endsection