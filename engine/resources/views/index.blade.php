@extends("layouts.master")

@section("title")
Home
@endsection

@push('css')
<style>
    html {
        scroll-behavior: smooth;
    }
    
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

    button{
        color: white;
    }

</style>
@endpush

@section("content")
@include("layouts.slider")
<section class="pt-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <h2><b>Unicorn Truck</b></h2>
                <p class="mt-2">
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
    </div>
</section>

<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="card" id="ourservice">
                    <div class="card-body">
                        <h4 class="text-center">Cari Truk</h4>
                        <hr>
                        <div class="row text-center my-3">
                            <div class="col-12 col-lg-4 mt-4">
                                <img src="{{ asset('assets/images/icons/truck.png') }}" alt="truck-delivery"
                                    class="img-fluid py-3" style="width: 130px">
                                <h5>Akses langsung ke armada partner kami</h5>
                            </div>
                            <div class="col-12 col-lg-4 mt-4">
                                <img src="{{ asset('assets/images/icons/tracking.png') }}" alt="truck-delivery"
                                    class="img-fluid py-3" style="width: 130px">
                                <h5>Barang bisa dipantau selama perjalanan</h5>
                            </div>
                            <div class="col-12 col-lg-4 mt-4">
                                <img src="{{ asset('assets/images/icons/delivery.png') }}" alt="truck-delivery"
                                    class="img-fluid py-3" style="width: 130px">
                                <h5>Pembayaran ketika barang sampai tujuan</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container pt-5">
    <div class="row text-center text-lg-left">
        <div class="col-12 col-lg-6">
            <h3 class="mt-5">Unicorn Driver dan User tersedia di Google Play</h3>
            <div class="row my-5">
                <div class="col-12 col-lg-6 mt-4">
                    <h4>Driver</h4>
                    <a href="">
                        <img src="{{ asset('assets/images/playstore.png') }}" alt="Tombol Play Store"
                            class="img-fluid w-50 mt-3">
                    </a>
                </div>
                <div class="col-12 col-lg-6 mt-4">
                    <h4>User</h4>
                    <a href="">
                        <img src="{{ asset('assets/images/playstore.png') }}" alt="Tombol Play Store"
                            class="img-fluid w-50 mt-3">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <img src="{{ asset('assets/images/note8.png') }}" alt="" class="img-fluid w-100 h-100">
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-12">
            <div class="border-bottom"></div>
        </div>
    </div>
</section>

<section class="container pt-5" id="about">
    <div class="row">
        <div class="col-12 col-lg-6">
            <img src="{{ asset('assets/images/strength.png') }}" alt="" class="img-fluid img-relative w-100 h-100">
            <div class="centered text-white">
                <h1 class="font-weight-bold">Our Strength</h1>
            </div>
        </div>
        <div class="col-12 col-lg-6" style="background: url({{ asset('assets/images/reds.png') }})">
            <h4 class="mt-3">Mengapa Kami:</h4>
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
</section>

<section class="container pt-5">
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Cari Muatan</h4>
                    <hr>
                    <div class="row text-center my-3">
                        <div class="col-12 col-lg-4 mt-4">
                            <img src="{{ asset('assets/images/icons/list.png') }}" alt="truck-delivery"
                                class="img-fluid py-3" style="width: 130px">
                            <h5>Cari muatan penuh saat pulang</h5>
                        </div>
                        <div class="col-12 col-lg-4 mt-4">
                            <img src="{{ asset('assets/images/icons/map.png') }}" alt="truck-delivery"
                                class="img-fluid py-3" style="width: 130px">
                            <h5>Pantau armada selama pengiriman</h5>
                        </div>
                        <div class="col-12 col-lg-4 mt-4">
                            <img src="{{ asset('assets/images/icons/delivery.png') }}" alt="truck-delivery"
                                class="img-fluid py-3" style="width: 130px">
                            <h5>Pembayaran ketika barang sampai tujuan</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5" id="contact">
    <div class="row text-center text-lg-left">
        <div class="col-12 col-lg-6" style="background: url({{ asset('assets/images/reds.png') }})">
            <h3 class="mt-5">Kami siap untuk menjadi partner anda.</h3>
            <p class="py-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam illum odit corrupti ipsam
                exercitationem reiciendis quam! Qui ex dignissimos placeat cum eos sint aperiam consectetur repellat
                dolorem, obcaecati earum culpa. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste amet
                nesciunt accusamus, facere beatae dolore nihil molestiae perspiciatis? Hic incidunt assumenda
                sapiente, obcaecati rerum recusandae! Iure alias tempora magni? Eaque.
            </p>
        </div>
        <div class="col-12 col-lg-6">
            <img src="{{ asset('assets/images/flow.png') }}" alt="" class="img-fluid img-relative w-100 h-100">
            <div class="centered text-white">
                <h1 class="font-weight-bold">Flow</h1>
            </div>
        </div>
    </div>
</section>

@endsection
