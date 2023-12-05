@extends('admin.layouts.app')

@section('content')

	<div class="container pt-5">
		<div class="row">
			
			<div class="col-4" align="center">
				<div class="container">
	                <img src="{{ asset('/img/people2.png') }}" style="height: 200px!important; width: auto;" class="img-fluid"><br>
	                <h4>{{ $customer }} Pengguna</h4>
				</div>
			</div>
			<div class="col-4" align="center">
				<div class="container">
	                <img src="{{ asset('/img/dolar.png') }}" style="height: 200px!important; width: auto;" class="img-fluid"><br>
	                <h4>{{ $transaksi }} Transaksi</h4>
				</div>
			</div>
			<div class="col-4" align="center">
				<div class="container">
	                <img src="{{ asset('/img/mobil.png') }}" style="height: 200px!important; width: auto;" class="img-fluid"><br>
	                <h4>{{ $car }} Mobil</h4>
				</div>
			</div>

		</div>
	</div>

@endsection