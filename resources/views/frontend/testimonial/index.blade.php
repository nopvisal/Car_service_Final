@extends('frontend.layouts.master')
@section('title', 'Testimonial')

@section('content')

<div>
    <div class="carousel-about">
        <div class="navbars-about">
            <h1>OUR CLIENTS REVIEWS</h1>
            

        </div>
    </div>
    <div class="content-about">
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

        @include('frontend.layouts.footer')
    </div>
</div>

@endsection