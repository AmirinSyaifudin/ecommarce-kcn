@extends('layouts.home')

@section('content')
    <!-- ======= Header ======= -->
    <section {{-- id="hero" class="d-flex align-items-center" --}}>
        {{-- <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1><span>UKM Agung Jemparingan</span></h1>
                    <h2>Delivering great food for more than 18 years!</h2>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in"
                    data-aos-delay="200">
                    <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="glightbox play-btn"></a>
                </div>

            </div>
        </div> --}}
    </section><!-- End Header -->

    <!-- Profile UKM -->
    <main id="main">
        <!-- ======= Produk Unggulan ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Profile</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2 mb-5" data-aos="zoom-in" data-aos-delay="100">
                        <iframe style="border:0; width: 100%; height: 350px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.4168605459813!2d110.44062691450834!3d-7.745531378934938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5bce9857fa8b%3A0xae9c86cd3964854a!2sBlk.%20A%2C%20Sempu%2C%20Wedomartani%2C%20Kec.%20Ngemplak%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta%2055584!5e0!3m2!1sen!2sid!4v1651037389177!5m2!1sen!2sid"
                            frameborder="0" allowfullscreen>
                        </iframe>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Pendhapa Jemparingan</h3>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> {{ $data->alamat }}</li>
                            <li><i class="fas fa-phone"></i> {{ $data->phone }}</li>
                            <li><i class="fas fa-envelope"></i> {{ $data->email }}
                            </li>
                        </ul>
                        <ul class="social-links mt-3 mb-5">
                            <li>
                                <a href="{{ $data->fb }}" target="_blank"
                                    style="border: 1px solid #000; border-radius: 50px"><i class="fab fa-facebook-f"
                                        style="color: #000"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $data->ig }}" target="_blank"
                                    style="border: 1px solid #000; border-radius: 50px"><i class="fab fa-instagram"
                                        style="color: #000"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $data->ytb }}" target="_blank"
                                    style="border: 1px solid #000; border-radius: 50px"><i class="fab fa-youtube"
                                        style="color: #000"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Produk Unggulan -->
    </main>
    <!-- End #main -->
    <!-- End Profile UKM -->
@endsection
