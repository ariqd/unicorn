@extends("layouts.master")

@section("title")
Home
@endsection

@push('css')
<style>
    .img-relative {
        position: relative;
        text-align: center;
        color: white;
        filter: brightness(50%);
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

</style>
@endpush

@section("content")
@include("layouts.slider")


<!-- Banner2 -->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <h1><b>Unicorn Truck</b></h1>
                <p class="mt-3">
                    <b>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                        esse cillum dolore
                        eu fugiat nulla pariatur.
                    </b>
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Cari Truk</h3>
                        <hr>
                        <div class="row text-center my-3">
                            <div class="col-12 col-lg-4 mt-4">
                                <img src="{{ asset('assets/images/icons/truck.png') }}" alt="truck-delivery"
                                    class="img-fluid py-3" style="width: 130px">
                                <h4>Akses langsung ke armada partner kami</h4>
                            </div>
                            <div class="col-12 col-lg-4 mt-4">
                                <img src="{{ asset('assets/images/icons/tracking.png') }}" alt="truck-delivery"
                                    class="img-fluid py-3" style="width: 130px">
                                <h4>Barang bisa dipantau selama perjalanan</h4>
                            </div>
                            <div class="col-12 col-lg-4 mt-4">
                                <img src="{{ asset('assets/images/icons/delivery.png') }}" alt="truck-delivery"
                                    class="img-fluid py-3" style="width: 130px">
                                <h4>Pembayaran ketika barang sampai tujuan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5 mt-5 text-center text-lg-left">
            <div class="col-12 col-lg-6">
                <h2 class="mt-5">Unicorn Driver dan User tersedia di Google Play</h2>
                <div class="row my-5">
                    <div class="col-12 col-lg-6 mt-4">
                        <h3>Driver</h3>
                        <a href="">
                            <img src="{{ asset('assets/images/playstore.png') }}" alt="Tombol Play Store"
                                class="img-fluid w-50 mt-3">
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 mt-4">
                        <h3>User</h3>
                        <a href="">
                            <img src="{{ asset('assets/images/playstore.png') }}" alt="Tombol Play Store"
                                class="img-fluid w-50 mt-3">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <img src="{{ asset('assets/images/note8.png') }}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row px-4">
            <div class="col-12 border"></div>
        </div>
        <div class="row my-5">
            <div class="col-12 col-lg-6">
                <img src="{{ asset('assets/images/strength.png') }}" alt="" class="img-fluid img-relative">
                <div class="centered text-white">
                    <h1 class="font-weight-bold">Our Strength</h1>
                </div>
            </div>
            <div class="col-12 col-lg-6" style="background: url({{ asset('assets/images/reds.png') }})">
                <h4>Mengapa Kami:</h4>
                <p class="mt-3">1. Cepat</p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti autem similique cumque vel
                    numquam, quibusdam, iure dolorem dolore tempora distinctio nam adipisci ipsam amet dolores.
                </p>
                <p class="mt-3">2. Terpantau</p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti autem similique cumque vel
                </p>
                <p class="mt-3">3. Aman</p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Cari Muatan</h3>
                        <hr>
                        <div class="row text-center my-3">
                            <div class="col-12 col-lg-4 mt-4">
                                <img src="{{ asset('assets/images/icons/list.png') }}" alt="truck-delivery"
                                    class="img-fluid py-3" style="width: 130px">
                                <h4>Cari muatan penuh saat pulang</h4>
                            </div>
                            <div class="col-12 col-lg-4 mt-4">
                                <img src="{{ asset('assets/images/icons/map.png') }}" alt="truck-delivery"
                                    class="img-fluid py-3" style="width: 130px">
                                <h4>Pantau armada selama pengiriman</h4>
                            </div>
                            <div class="col-12 col-lg-4 mt-4">
                                <img src="{{ asset('assets/images/icons/delivery.png') }}" alt="truck-delivery"
                                    class="img-fluid py-3" style="width: 130px">
                                <h4>Pembayaran ketika barang sampai tujuan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5 mt-5 text-center text-lg-left">
            <div class="col-12 col-lg-6" style="background: url({{ asset('assets/images/reds.png') }})">
                <h2 class="mt-5">Kami siap untuk menjadi partner anda.</h2>
                <p class="mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam illum odit corrupti ipsam
                    exercitationem reiciendis quam! Qui ex dignissimos placeat cum eos sint aperiam consectetur repellat
                    dolorem, obcaecati earum culpa. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste amet
                    nesciunt accusamus, facere beatae dolore nihil molestiae perspiciatis? Hic incidunt assumenda
                    sapiente, obcaecati rerum recusandae! Iure alias tempora magni? Eaque.
                </p>
            </div>
            <div class="col-12 col-lg-6">
                <img src="{{ asset('assets/images/flow.png') }}" alt="" class="img-fluid img-relative">
                <div class="centered text-white">
                    <h1 class="font-weight-bold">Flow</h1>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
