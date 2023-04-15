<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- stylesheet -->
    <link href="{{ asset('assets/styles/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/styles/visiter.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/styles/ourpackage.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/styles/faq.css') }}" rel="stylesheet">


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <title>Mayflower</title>
</head>
<style>

</style>

<body>

    <!-- header -->
    <nav
        class="navbar justify-content-start navbar-expand-lg navbar-light bg-light d-flex shadow-lg p-3 bg-body rounded sticky-top navbar1">
        <a href="http://127.0.0.1:8000/">
            <img class="logo" src="{{ asset('assets/images/site-logo.png') }}" style="max-height: 33px;" />
        </a>
        <div class="container-fluid nav1">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse col-9 navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav header">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Patients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('ourpackage')}}">Health Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('faq.create')}}">FAQ's</a>
                    </li>
                    &nbsp;&nbsp;
                    
                </ul>
            </div>

            <div class="collapse navbar-collapse justify-content-end btun" id="navbarSupportedContent">
                <ul class="navbar-nav header gap-2">

                    <li class="nav-item">
                        <button type="button" class="btn navbutton1">Book on call</button>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('visitor') }}"> <button type="button" class="btn navbutton2"><i
                                    class="bi bi-person"></i>&nbsp;Log
                                in</button></a>
                    </li>
                    &nbsp;&nbsp;

                </ul>
            </div>

        </div>
    </nav>
    <!-- header end -->
    <div id="wrapper">
        <div class="main-content">
            @yield('content')
            <!-- /.row -->

        </div>
        <!-- /.main-content -->
    </div>

    <!--footer start-->
    <!-- Footer -->
    <footer class="text-center text-sm-start bg-light footer p-2">
        <section class="">
            <div class="container text-center text-md-start pt-5">
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
                        <!-- Content -->
                        <div class="text-center footerimage1">
                            <img src="{{ asset('assets/images/site-logo.png') }}" alt=""
                                class="img-fluid footerimage">
                        </div>
                        <div class="mt-5">
                            <p>We are Mayflower Women's Hospital a unit of Mayflower Hospital Pvt.Ltd. and India's one
                                of the largest private women's speciality Hospital with 16 years of expertise in
                                gy-naecology and obstetrics , committed to excellence in healthcare for women. </p>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h5 class=" fw-bold mb-4 pt-5 ps-4 part1">
                            Quick Links
                        </h5>
                        <div class="pt-3 ps-4 d-grid gap-3">
                            <div class="">
                                <a href="#!" class="footericon1">About</a>
                            </div>
                            <div class="">
                                <a href="#!" class="footericon1">Facilities</a>
                            </div>
                            <div class="">
                                <a href="#!" class="footericon1">Patients</a>
                            </div>
                            <div class="">
                                <a href="#!" class="footericon1">FAQ</a>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                        <!-- Links -->
                        <h4 class=" fw-bold mb-4 pt-5 part2">
                        </h4>
                        <div class="pt-5 d-grid gap-3 part3">
                            <div class="">
                                <a href="#!" class="footericon1">Contact Us</a>
                            </div>
                            <div class="">
                                <a href="#!" class="footericon1">Careers</a>
                            </div>
                            <div class="">
                                <a href="#!" class="footericon1">Make appoinment</a>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-3 d-grid gap-3">
                        <!-- Links -->
                        <h5 class="fw-bold  mb-4 pt-5 ps-4">
                            Address
                        </h5>

                        <div class="">
                            <i class="bi bi-geo-alt-fill"></i>&nbsp; Mayflower House, Ring Road-Drive-In Road
                            Juncation, Ahmedabad
                        </div>
                        <div class="">
                            <i class="bi bi-telephone-fill"></i>&nbsp; +91- 9898036701
                        </div>
                        <div class="">
                            <i class="bi bi-envelope-fill"></i>&nbsp; care@mayflowerhospital.com
                        </div>
                        <div>
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-youtube"></i>
                            <i class="bi bi-linkedin"></i>
                            <i class="bi bi-google"></i>
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <div class="text-center">
                    <p>Copyright © 2022 wCard Technology Pvt. Ltd.
                        All Rights Reserved.</p>
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->
    </footer>
    <!-- Footer -->
    <!-- end footer -->
</body>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>

</html>
