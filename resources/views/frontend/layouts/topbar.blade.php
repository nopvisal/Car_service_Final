<!-- Topbar Start -->
<div class="container-fluid  p-0">
    <div class="row gx-0 d-lg-flex nav-top">
        <div class="col-lg-5 col-11 nav-p text-start">
            <a href="#" class="navbar-brand d-flex align-items-center ">
                <h2 class="m-0 text-warning"><i class="fa fa-car me-3"></i>VI-FIX</h2>
            </a>

        </div>
        <div class="col-lg-7 col-1  text-end dis">
            <div class="navbar-brand d-flex align-items-center ">
                <i class="fa fa-list toggle-btn" id="toggleBtn"></i>
                <div class="sidebar" id="sidebar">
                    <div class="col-12 nav-p text-start">
                        <a href="index" class="navbar-brand d-flex align-items-center ">
                            <h2 class="m-0 text-warning"><i class="fa fa-car me-3"></i>VI-FIX</h2>
                        </a>
                        <div
                            style="width:120%; height: 5px; background-color: darkgray; margin-top: 50px; opacity:0.5; margin-left:-20px;">
                        </div>
                    </div>
                    <ul class="sidelink">
                        <a href="/home" class="">Home</a>
                        <a href="/aboutus" class="">Aboutus</a>
                        <a href="/service" class="">Services</a>
                        <a href="/shop" class="">Spare Part</a>
                        <a href="/contact" class="">Contact</a>
                    </ul>
                    <div
                        style="width:120%; height: 5px; background-color: darkgray; margin-top: 20px; opacity:0.5; margin-left:-20px;">
                    </div>
                    <div class="h-20 d-inline-flex align-items-center col-12" style="padding-top:20px; padding-left:-30px;">
                        @auth
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="p-1 px-4 btn-primary rounded-lg">Logout</button>
                            </form>
                        @else
                            <a href="/login">
                                <div class="buttons">Login</div>
                            </a>

                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 px-2 text-end d-non">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <a href="index" class="text-light">Customer Support</a>
            </div>

            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <a href="index" class="text-light"><img style="width:30px;height:20px;" src="{{ asset('frontend/img/flag.png') }}" alt="">
                    USD
                </a>
            </div>

            <div class="h-100 d-inline-flex align-items-center">
                <!-- Booking -->
                <button class="buttons" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="border:none;">
                    Booking
                </button>

                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" >
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div id="booking" class="section">
                                    <div class="">
                                        <div class="container">
                                            <div class="row">
                                                <div class="bg-blue h-100 d-flex flex-column justify-content-center text-center p-5 ">
                                                    <h1 class="text-white mb-4">Book For A Service</h1>
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
                            </div>
                        </div>
                    </div>
                </div>

                
                @auth('customer')
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="p-1 px-4 btn-primary rounded-lg">Logout</button>
                    </form>
                    <h4 style="position:absolute;top:60px;right:20px;color:white;">Welcome, {{ Auth::guard('customer')->user()->name }}</h4>

                  
                @else
                    <a href="/login" class="buttons">
                        Login
                    </a>
                @endauth


            </div>

        </div>
    </div>
</div>
<!-- Topbar End -->
