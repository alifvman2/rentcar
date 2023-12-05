@extends('layouts.app')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/img/alpard.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Sewa Mobil Apa Pun, Kapan Pun! #RentCarSelaluAda</h3>
                    <p style="color: black;">RentCar adalah aplikasi marketplace sewa mobil terbesar di Indonesia dengan 10.000+ unit kendaraan untuk sewa seminggu, sehari hingga sebulan. Jenis mobil, tarif, lokasi dapat diakses melalui satu aplikasi yang memudahkan Anda untuk membandingkan dan memilih mobil rental yang cocok dari ribuan Host terpercaya dan terverifikasi.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/img/fortuner.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Penyedia Jasa Rental Mobil Terbaik</h3>
                    <p style="color: black;">Rental mobil terpercaya dengan RentCar. Menyediakan layanan jasa rental mobil di Jakarta dengan armada terbaru dan harga terjangkau. Nikmati kenyamanan dan keamanan perjalanan Anda bersama kami</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/img/rush.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Sewa Mobil Murah</h3>
                    <p style="color: black;">RentCar melayani jasa rental mobil terbaik di Indonesia. Memberikan pelayanan terbaik untuk para customer demi kenyamanan dalam perjalanan berwisata maupun perjalanan bisnis. Semua armada kami pastikan dalam kondisi prima dan siap untuk menemani perjalanan anda.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="bg-primary">
        <div class="container">
            <div align="center" class=" p-5">
                <h2>Cerita Perjanan RentCar</h2>
            </div>
            <div class="row p-5">
                <div class="col-sm-3 mb-3 mb-sm-0" align="center">
                    <img src="{{ asset('/img/people.png') }}" class="img-fluid"><br>
                    <h4>1.5K Pengguna</h4>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0" align="center">
                    <img src="{{ asset('/img/booking.png') }}" class="img-fluid"><br>
                    <h4>71k Booking Selesai</h4>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0" align="center">
                    <img src="{{ asset('/img/indonesia.png') }}" class="img-fluid"><br>
                    <h4>22 Kota di Indonesia</h4>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0" align="center">
                    <img src="{{ asset('/img/inscrit.png') }}" class="img-fluid"><br>
                    <h4>10K Mobil Terdaftar</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($data as $dataa)
                <div class="col-4">
                    <div class="card m-2 p-3">
                        <div class="card-body" >
                            <h2>Rp. {{ $dataa->harga }}</h2>
                            <h5>{{ $dataa->merk }}</h5>
                            <h6>{{ $dataa->warna }}</h6>
                            <h6>{{ $dataa->tahun }}</h6>
                            <div class="col-12 pt-5" align="center">
                                <a href="{{ route('Home.pesan', ['id', => $dataa->id]) }}" class="btn btn-primary">Pesan</a> 
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
