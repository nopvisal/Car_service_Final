@extends('frontend.layouts.master')
@section('title', 'Home')
@section('home_active','active')
@section('content')
    <!-- Carousel Start -->
    <div>
        <div class="carousel">
            <div class="navbars">
                <h1>OUR SERVICES</h1>
                <div class="booking-shortcut">
                    <div class="booking-column">Changing Oil</div>
                    <div class="booking-column">Diagnostic Test</div>
                    <div class="booking-column">Engine Service</div>
                    <div class="btn-search">Search</div>
                </div>

            </div>
        </div>
        <!-- Carousel End -->
        <div class="cars col-lg-5 d-none d-lg-flex animated zoomIn">
            <img class="img-fluid" src="{{ asset('frontend/img/carousel-1.png') }}" alt="">
        </div>
        <div class="content">
            <!-- Service Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="d-flex py-5 px-4">
                                <i class="icon fa fa-certificate fa-3x flex-shrink-0"></i>
                                <div class="ps-4">
                                    <h5 class="mb-3">Quality Servicing</h5>
                                    <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                                    <a class="text-secondary border-bottom" href="">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="d-flex bg-light py-5 px-4">
                                <i class="icon fa fa-users-cog fa-3x flex-shrink-0"></i>
                                <div class="ps-4">
                                    <h5 class="mb-3">Expert Workers</h5>
                                    <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                                    <a class="text-secondary border-bottom" href="">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="d-flex py-5 px-4">
                                <i class="icon fa fa-tools fa-3x flex-shrink-0"></i>
                                <div class="ps-4">
                                    <h5 class="mb-3">Modern Equipment</h5>
                                    <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                                    <a class="text-secondary border-bottom" href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->


            <!-- About Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 pt-4" style="min-height: 400px;">
                            <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                                <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('frontend/img/about.jpg') }}"
                                    style="object-fit: cover;" alt="">
                                <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5"
                                    style="background: rgba(0, 0, 0, .08);">
                                    <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Years</span></h1>
                                    <h4 class="text-white">Experience</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="icon text-uppercase">// About Us //</h6>
                            <h1 class="mb-4"><span class="icon">CarServ</span> Is The Best Place For Your Auto
                                Care</h1>
                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                                diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                                dolore erat amet</p>
                            <div class="row g-4 mb-3 pb-3">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="d-flex">
                                        <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                            style="width: 45px; height: 45px;">
                                            <span class="fw-bold text-secondary">01</span>
                                        </div>
                                        <div class="ps-3">
                                            <h6>Professional & Expert</h6>
                                            <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="d-flex">
                                        <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                            style="width: 45px; height: 45px;">
                                            <span class="fw-bold text-secondary">02</span>
                                        </div>
                                        <div class="ps-3">
                                            <h6>Quality Servicing Center</h6>
                                            <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="d-flex">
                                        <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                            style="width: 45px; height: 45px;">
                                            <span class="fw-bold text-secondary">03</span>
                                        </div>
                                        <div class="ps-3">
                                            <h6>Awards Winning Workers</h6>
                                            <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="" class="btn py-3 px-5 bg-blue">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Fact Start -->
            <div class="container-fluid fact bg-dark my-5 py-5">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                            <i class="fa fa-check fa-2x text-white mb-3"></i>
                            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                            <p class="text-white mb-0">Years Experience</p>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                            <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                            <p class="text-white mb-0">Expert Technicians</p>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-users fa-2x text-white mb-3"></i>
                            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                            <p class="text-white mb-0">Satisfied Clients</p>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-car fa-2x text-white mb-3"></i>
                            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                            <p class="text-white mb-0">Compleate Projects</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fact End -->


            <!-- Service Start -->
            <div class="container-xxl service py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="icon text-uppercase">// Our Services //</h6>
                        <h1 class="mb-5">Explore Our Services</h1>
                    </div>
                    <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="col-lg-4">
                            <div class="nav w-100 nav-pills me-4">
                                <button class=" w-100 d-flex align-items-center text-start  p-4 mb-4 active"
                                    style="border:solid 1px;" data-bs-toggle="pill" data-bs-target="#tab-pane-1"
                                    type="button">

                                    <h4 class="m-0">Diagnostic Test</h4>
                                </button>
                                <button class=" w-100 d-flex align-items-center text-start p-4 mb-4 " style="border:solid 1px;
                                    data-bs-toggle=" pill" data-bs-target="#tab-pane-2" type="button">

                                    <h4 class="m-0">Engine Servicing</h4>
                                </button>
                                <button class=" w-100 d-flex align-items-center text-start p-4 mb-4" style="border:solid 1px;
                                    data-bs-toggle=" pill" data-bs-target="#tab-pane-3" type="button">

                                    <h4 class="m-0">Tires Replacement</h4>
                                </button>
                                <button class=" w-100 d-flex align-items-center text-start p-4 mb-0" style="border:solid 1px;
                                    data-bs-toggle=" pill" data-bs-target="#tab-pane-4" type="button">

                                    <h4 class="m-0">Oil Changing</h4>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="tab-content w-100">
                                <div class="tab-pane fade show active" id="tab-pane-1">
                                    <div class="row g-4">
                                        <div class="col-md-6" style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="{{ asset('frontend/img/service-1.jpg') }}" style="object-fit: cover;" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                                                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                                                lorem sit clita duo justo magna dolore erat amet</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                            <a href="" class="btn bg-blue py-3 px-5 mt-3">Read More<i
                                                    class="fa fa-arrow-right ms-3"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-pane-2">
                                    <div class="row g-4">
                                        <div class="col-md-6 " style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="{{ asset('frontend/img/service-2.jpg') }}" style="object-fit: cover;" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                                                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                                                lorem sit clita duo justo magna dolore erat amet</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                            <a href="" class="btn bg-blue py-3 px-5 mt-3">Read More<i
                                                    class="fa fa-arrow-right ms-3"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-pane-3">
                                    <div class="row g-4">
                                        <div class="col-md-6" style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="{{ asset('frontend/img/service-3.jpg') }}" style="object-fit: cover;" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                                                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                                                lorem sit clita duo justo magna dolore erat amet</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                            <a href="" class="btn bg-blue py-3 px-5 mt-3">Read More<i
                                                    class="fa fa-arrow-right ms-3"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-pane-4">
                                    <div class="row g-4">
                                        <div class="col-md-6" style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="{{ asset('frontend/img/service-4.jpg') }}" style="object-fit: cover;" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                                                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                                                lorem sit clita duo justo magna dolore erat amet</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                            <a href="" class="btn bg-blue py-3 px-5 mt-3">Read More<i
                                                    class="fa fa-arrow-right ms-3"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->


            <!-- Booking Start -->
            <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row gx-5">
                        <div class="col-lg-6 py-5">
                            <div class="py-5">
                                <h1 class="text-white mb-4">Certified and Award Winning Car Repair Service Provider</h1>
                                <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing
                                    kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea
                                    invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo
                                    invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata
                                    takimata sanctus sed.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-blue h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                                data-wow-delay="0.6s">
                                <h1 class="text-white mb-4">Book For A Service</h1>

                               <!-- booking form -->
                               <form method="POST" action="{{ route('booking.store') }}">
                                    @csrf
                                    <div class="row g-3">

                                    <!-- Customer Phone -->
                                    <div class="col-12 col-sm-6">
                                        <input type="text" name="phone" placeholder="Your Phone" required class="form-control border-0" style="height: 55px;">
                                    </div>
                                    <!-- Customer Email -->
                                    <div class="col-12 col-sm-6">
                                    <input type="email" name="email" placeholder="Your Email" required class="form-control border-0" style="height: 55px;">
                                    </div>
                                    <!-- Service Selection -->
                                    <div class="col-12 col-sm-6">
                                        <select name="service_id" required class="form-select border-0" style="height: 55px;">
                                            <option selected>Select A Service</option>
                                            @foreach($services as $service)
                                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Service Date -->
                                    <div class="col-12 col-sm-6">
                                        <input type="date" name="service_date" required class="form-control border-0" style="height: 55px;">
                                    </div>
                                    <!-- Special Request -->
                                    <div class="col-12 ">
                                        <textarea name="special_request" placeholder="Special Request" class="form-control border-0"></textarea>
                                    </div>
                                    <!-- Submit -->
                                    <div class="col-12 ">
                                        <button type="submit" class="btn btn-secondary w-100 py-3">Book Now</button>
                                    </div>
                                    </div>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Booking End -->


            <!-- Team Start -->
            <div class="main-team">
                <div class="team">
                    <div class="container-xxl py-5">
                        <div class="container">
                            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                <h6 class="icon text-uppercase">// Our Technicians //</h6>
                                <h1 class="mb-5">Our Expert Technicians</h1>
                            </div>
                            <div class="row g-4">
                                <div class=" col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item">
                                        <div class="card-team1 position-relative overflow-hidden">
                                            <img class="img-fluid" src="{{ asset('frontend/img/p1.jpg') }}" alt="">

                                        </div>
                                        <div class="bg-light text-center p-4">
                                            <h5 class="fw-bold mb-0">Nop Visal</h5>
                                            <small>Frontend</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="team-item">
                                        <div class="card-team2 position-relative overflow-hidden">
                                            <img class="img-fluid" src="{{ asset('frontend/img/p2.JPEG') }}" alt="">

                                        </div>
                                        <div class="bg-light text-center p-4">
                                            <h5 class="fw-bold mb-0">Sour Bandith</h5>
                                            <small>Team Leader</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="team-item">
                                        <div class="card-team3 position-relative overflow-hidden">
                                            <img class="img-fluid" src="{{ asset('frontend/img/p3.jpg') }}" alt="">

                                        </div>
                                        <div class="bg-light text-center p-4">
                                            <h5 class="fw-bold mb-0">Ith Sokny</h5>
                                            <small>Frontend</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="team-item">
                                        <div class="card-team5 position-relative overflow-hidden">
                                            <img class="img-fluid" src="{{ asset('frontend/img/p5.jpg') }}" alt="">

                                        </div>
                                        <div class="bg-light text-center p-4">
                                            <h5 class="fw-bold mb-0">Khim Hengngoun</h5>
                                            <small>Project Leader</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="team-item">
                                        <div class="card-team4 position-relative overflow-hidden">
                                            <img class="img-fluid" src="{{ asset('frontend/img/p4.jpg') }}" alt="">

                                        </div>
                                        <div class="bg-light text-center p-4">
                                            <h5 class="fw-bold mb-0">Mengchheang</h5>
                                            <small>Backend</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="team-item">
                                        <div class="card-team6 position-relative overflow-hidden">
                                            <img class="img-fluid" src="{{ asset('frontend/img/p6.jpg') }}" alt="">

                                        </div>
                                        <div class="bg-light text-center p-4">
                                            <h5 class="fw-bold mb-0">The Legend VENGLYCHHEANG</h5>
                                            <small>Backend</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->


            <!-- Testimonial Start -->
            <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="text-center">
                        <h6 class="icon text-uppercase">// Testimonial //</h6>
                        <h1 class="mb-5">Our Clients Say!</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel position-relative">
                        <div class="testimonial-item text-center">
                            <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('frontend/img/p6.jpg') }}"
                                style="width: 80px; height: 80px;">
                            <h5 class="mb-0">The Legend</h5>
                            <p>Profession</p>
                            <div class=" bg-light text-center p-4">
                                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet
                                    diam et eos. Clita erat ipsum et lorem et sit.</p>
                            </div>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('frontend/img/p5.jpg') }}"
                                style="width: 80px; height: 80px;">
                            <h5 class="mb-0">OraNgoun</h5>
                            <p>Profession</p>
                            <div class=" bg-light text-center p-4">
                                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet
                                    diam et eos. Clita erat ipsum et lorem et sit.</p>
                            </div>
                        </div>
                        <div class=" text-center">
                            <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('frontend/img/p6.jpg') }}"
                                style="width: 80px; height: 80px;">
                            <h5 class="mb-0">The Boss</h5>
                            <p>Profession</p>
                            <div class=" bg-light text-center p-4">
                                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet
                                    diam et eos. Clita erat ipsum et lorem et sit.</p>
                            </div>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('frontend/img/p7.jpg') }}"
                                style="width: 80px; height: 80px;">
                            <h5 class="mb-0">Ngoun GPT</h5>
                            <p>Profession</p>
                            <div class=" bg-light text-center p-4">
                                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet
                                    diam et eos. Clita erat ipsum et lorem et sit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->

            @include('frontend.layouts.footer')

        </div>
    </div>
@endsection
