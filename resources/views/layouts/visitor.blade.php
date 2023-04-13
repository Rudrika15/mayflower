@extends('layouts.welcomeapp')

@section('content')
    {{-- section1 --}}
    <div class="testimonial-slider pb-3">
        <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
            <div class="container-fluid">
                <div class="row carousel-dark">
                    <div class="col-md-6 mt-5">

                        <h1 class="fw-bold mt-5 text-white carousel-control">Welcome to Mayflower</h1>
                        
                        <a class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="">Create an account</span>
                        </a>

                        <a class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next"
                            style="text-decoration: none;">
                            <span class="ms-3"> or </span>
                            <span class="login">&nbsp; Login</span>
                        </a>
                        
                    </div>
                    <div class="col-md-5 d-flex justify-content-start">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="" style="width: 35rem;">
                                    <div class="card mt-3 mb-5 sectioncard" id="registerForm" style="width: 33rem;">
                                        <div class="row g-0">
                                            <div class="col-md-4 col-sm-4 d-flex justify-content-center">
                                                <img src="{{ asset('assets/images/register.jpg') }}" alt="Responsive image"
                                                    class="cardimage img-fluid">
                                            </div>
                                            <div class="col-md-8 col-md-8 d-flex justify-content-center">
                                                <div class="card-body text-center mt-2 d-grid gap-3">
                                                    <form action="" class="fw-bold register-form d-grid gap-3"
                                                        id="register-form">

                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputfirstname1" aria-describedby="emailHelp"
                                                                placeholder="First Name">
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="text" class="form-control required="
                                                                placeholder="Last Name*" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control required="
                                                                placeholder="Phone Number*" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control required="
                                                                placeholder="Email ID*" />
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1"
                                                                style="font-size: 10px;">By
                                                                providing the above
                                                                details, I hereby agree and accept the Terms od Service and
                                                                Privacy
                                                                Policy
                                                                in use of Mayflower Women's Hospital</label>
                                                        </div>
                                                        <div class="form-check d-flex justify-content-start">
                                                            <button type="button"
                                                                class="btn btn-secondary btncard align- ">SEND OTP
                                                                &nbsp;&nbsp;
                                                                <i class="bi bi-check-circle  push-right"></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- login --}}
                            <div class="carousel-item active">
                                <div class="" style="width: 35rem;">
                                    <div class="card mb-5 mt-3 sectioncard" id="loginForm" style="width: 33rem;">
                                        <div class="row g-0">
                                            <div class="col-md-4 col-sm-4 d-flex justify-content-center">
                                                <img src="{{ asset('assets/images/image3.jpg') }}" alt="Responsive image"
                                                    class="cardimage img-fluid">
                                            </div>
                                            <div class="col-md-8 col-md-8 d-flex justify-content-center">
                                                <div class="card-body text-center mt-3">
                                                    <form action="" class="fw-bold login-form d-grid gap-3"
                                                        id="login-form">

                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputfirstname1" aria-describedby="emailHelp"
                                                                placeholder="Phone Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1"
                                                                    style="font-size: 10px;">By providing the
                                                                    above
                                                                    details, I hereby agree and accept the Terms od Service
                                                                    and Privacy
                                                                    Policy
                                                                    in use of Mayflower Women's Hospital</label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <button type="button"
                                                                        class="btn btn-secondary btncard align- ">SEND
                                                                        OTP
                                                                        &nbsp;&nbsp;
                                                                        <i
                                                                            class="bi bi-check-circle  push-right"></i></button>
                                                                </div>
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
            </div>
        </div>
    </div>

    {{-- section1 end --}}

    {{-- section 2  --}}
    <div class="read">
        <div class="container">
            <div class="">
                <h3 class="fw-bold text-center p-5">Read something from our blogs</h3>
            </div>

            <div class="container d-flex justify-content-center">
                <div class="row pb-5">
                    <div class="col">
                        <div class="card sectioncard " style="width: 18rem; ">
                            <div class="sectionimg">
                            </div>
                            <div class="card-body">
                                <h6 class="card-text fw-bold">What You Need To Know About Food Intolerance</h6>
                                <p class="mt-3">By Athira Krishnadas</p>
                                <hr>
                                <div class="row">
                                    <div class="col-5">
                                        <p>10 mins</p>
                                    </div>
                                    <div class="col-7">
                                        Read it now <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card sectioncard " style="width: 18rem;">
                            <div class="sectionimg">
                            </div>
                            <div class="card-body">
                                <h6 class="card-text fw-bold">What You Need To Know About Food Intolerance</h6>
                                <p class="mt-3">By Athira Krishnadas</p>
                                <hr>
                                <div class="row">
                                    <div class="col-5">
                                        <p>10 mins</p>
                                    </div>
                                    <div class="col-7">
                                        Read it now <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card sectioncard " style="width: 18rem;">
                            <div class="sectionimg">
                            </div>
                            <div class="card-body">
                                <h6 class="card-text fw-bold">What You Need To Know About Food Intolerance</h6>
                                <p class="mt-3">By Athira Krishnadas</p>
                                <hr>
                                <div class="row">
                                    <div class="col-5">
                                        <p>10 mins</p>
                                    </div>
                                    <div class="col-7">
                                        Read it now <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- section 2 end --}}

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script>
        var multipleCardCarousel = document.querySelector("#carouselExampleControls");
        if (window.matchMedia("(min-width: 576px)").matches) {
            var carousel = new bootstrap.Carousel(multipleCardCarousel, {
                interval: false
            });
            var carouselWidth = $(".carousel-inner")[0].scrollWidth;
            var cardWidth = $(".carousel-item").width();
            var scrollPosition = 0;
            $("#carouselExampleControls .carousel-control-next").on("click", function() {
                if (scrollPosition < cardWidth * 1) //carouselWidth -
                 {
                    scrollPosition += cardWidth;
                    $("#carouselExampleControls .carousel-inner").animate({
                            scrollLeft: scrollPosition
                        },
                        500
                    );
                }
            });
            $("#carouselExampleControls .carousel-control-prev").on("click", function() {
                if (scrollPosition > 0) {
                    scrollPosition -= cardWidth;
                    $("#carouselExampleControls .carousel-inner").animate({
                        scrollLeft: scrollPosition
                    }, 500);
                }
            });
        } else {
            $(multipleCardCarousel).addClass("slide");
        }
    </script>
@endsection
