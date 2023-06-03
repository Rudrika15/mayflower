<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mayflower</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/fontawesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- CSS and JS file -->
    <link href="{{asset('assets/styles/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/styles/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/styles/style.css')}}" rel="stylesheet">
    <title></title>
</head>

<body>
    @include('layouts.menu')



    <section class="pink-banner mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h1 class="heading-txt health-txt">Complete<br> Health Screening<br> For Women</h1>
                    <p class="health-txt-p">We’re the first comprehensive health
                        diagnostic platform designed for wome</p>
                    <a class="book-btn d-n">Book a test now</a>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 ">
                    <div class="layer-img"><img src="{{asset('assets/images/Group%20162.svg')}}"></div>
                    <div class="layer-one"><img src="{{asset('assets/images/Layer.svg')}}"></div>
                    <div class="capsule"><img src="{{asset('assets/images/capsule.svg')}}"></div>
                    <div class="round-img"><img src="{{asset('assets/images/round.svg')}}"></div>
                    <div class="massege-img-box">
                        <img src="{{asset('assets/images/massege.png')}}">
                        <a class="book-btn d-b">Book a test now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="find_section">
        <div class="container">
            <h2 class="heading-text">Find the right test</h2>
            <p class="find-txt-p">Fill in the details and get the most suitable package just for you.</p>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="fint-box">
                                <img src="{{asset('assets/images/old.svg')}}">
                                <p>How old are you?</p>
                                <div class="number">
                                    <span class="minus">-</span>
                                    <input type="text" value="35" />
                                    <span class="plus">+</span>
                                </div>
                                <span class="fet">Year</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="fint-box">
                                <img src="{{asset('assets/images/weight.svg')}}">
                                <p>What is your weight?</p>
                                <div class="number">
                                    <span class="minus">-</span>
                                    <input type="text" value="64" />
                                    <span class="plus">+</span>
                                </div>
                                <span class="fet">Kgs</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="fint-box">
                                <img src="{{asset('assets/images/height.svg')}}">
                                <p>What is your height?</p>
                                <div class="number">
                                    <span class="minus">-</span>
                                    <input type="text" value="5.5" />
                                    <span class="plus">+</span>
                                </div>
                                <span class="fet tt">Feet & inches</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6  col-sx-6">
                            <div class="fimily-box">
                                <p>What is your family health history?</p>
                                <ul>
                                    <li>
                                        <label for="Cancer" class="cancer-input">
                                            <input type="checkbox" id="Cancer" name="Cancer">
                                            <span class="checkmark"></span> <span class="check-text">Cancer</span></label>
                                    </li>

                                    <li>
                                        <label for="diabetes">
                                            <input type="checkbox" id="diabetes" name="Diabetes">
                                            <span class="checkmark"></span>
                                            <span class="check-text">Diabetes</span></label>
                                    </li>
                                    <li>
                                        <label for="blood-pressure">
                                            <input type="checkbox" id="blood-pressure" name="Blood Pressure"><span class="checkmark"></span>
                                            <span class="check-text">Blood Pressure</span></label>
                                    </li>
                                    <li>
                                        <label for="obesity">
                                            <input type="checkbox" id="obesity" name="Obesity">
                                            <span class="checkmark"></span>
                                            <span class="check-text">Obesity</span></label>
                                    </li>
                                    <li>
                                        <label for="mental-illness">
                                            <input type="checkbox" name="Mental illness" id="mental-illness">
                                            <span class="checkmark"></span>
                                            <span class="check-text">Mental illness</span></label>
                                    </li>

                                </ul>
                                <ul class="mention">
                                    <li>
                                        <input type="checkbox" name="Others">
                                        <span class="checkmark"></span>
                                        <label for="Others"><span class="check-text">Others</label>
                                    </li>
                                    <li>
                                        <div class="mention-txt">
                                            <input type="text" name="" placeholder="Please mention">
                                        </div>
                                    </li>
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 d-xl-none d-lg-none col-sx-6">
                            <img src="{{asset('assets/images/find.svg')}}">
                            <div class="click-txt book-box">
                                <h2>But why do we need all this info?
                                </h2>
                                <a><img src="{{asset('assets/images/click.svg')}}"> Click here to know</a>
                            </div>
                        </div>
                        <button class="otp-btn d-none d-xl-block">SUBMIT</button>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 d-none d-xl-block d-lg-block">
                    <img src="{{asset('assets/images/find.svg')}}">
                    <div class="click-txt book-box">
                        <h2>But why do we need all this info?
                            </h1>
                            <a><img src="{{asset('assets/images/click.svg')}}"> Click here to know</a>
                    </div>
                </div>
    </section>




    <section class="our_package yellow-box">
        <div class="container">
            <h2>Our packages</h2>
            <p>Stay on top of your health with our packages<br>
                for all your healthcare needs.</p>
            <div class="multiple-items slider-package-item">
                <div class="slider_data">
                    <div class="inner">
                        <h2 class="heading-txt">Mayflower all in one</h2>
                        <p>Comprehensive woman health
                            check-up encompassing all the
                            critical aspect of women’s health.</p>
                        <div class="tick"><img src="{{asset('assets/images/tick.svg')}}"></div>
                        <ul>
                            <li><img src="{{asset('assets/images/test.svg')}}"> 23 CRITICAL TESTS</li>
                            <li><img src="{{asset('assets/images/blood.svg')}}"> Blood & Urine sample</li>
                        </ul>
                        <a href="#" class="btn">Book Now</a>
                    </div>

                </div>
                <div class="slider_data">
                    <div class="inner">
                        <h2 class="heading-txt">PCOS Screening</h2>
                        <p>Screening and detection of PCOS,
                            consultation on positive lifestyle
                            changes to minimize the effect</p>
                        <div class="tick"><img src="{{asset('assets/images/tick.svg')}}"></div>
                        <ul>
                            <li><img src="{{asset('assets/images/test.svg')}}"> 23 CRITICAL TESTS</li>
                            <li><img src="{{asset('assets/images/blood.svg')}}"> Blood & Urine sample</li>
                        </ul>
                        <a href="#" class="btn">Book Now</a>
                    </div>

                </div>
                <div class="slider_data">
                    <div class="inner">
                        <h2 class="heading-txt">Fertility checkup</h2>
                        <p>Take charge of your reproduction
                            health with complete fertility checkup
                            Involving comprehensive diagnosis
                            checkups</p>
                        <div class="tick"><img src="{{asset('assets/images/tick.svg')}}"></div>
                        <ul>
                            <li><img src="{{asset('assets/images/test.svg')}}"> 23 CRITICAL TESTS</li>
                            <li><img src="{{asset('assets/images/blood.svg')}}"> Blood & Urine sample</li>
                        </ul>
                        <a href="#" class="btn">Book Now</a>
                    </div>

                </div>
                <div class="slider_data">
                    <div class="inner">
                        <h2 class="heading-txt">Menopausal</h2>
                        <p>Screening and consulting for mature
                            woman before they enter menopause
                            with informed understading of incoming
                            physical and emotional changes. </p>
                        <div class="tick"><img src="{{asset('assets/images/tick.svg')}}"></div>
                        <ul>
                            <li><img src="{{asset('assets/images/test.svg')}}"> 23 CRITICAL TESTS</li>
                            <li><img src="{{asset('assets/images/blood.svg')}}"> Blood & Urine sample</li>
                        </ul>
                        <a href="#" class="btn">Book Now</a>
                    </div>

                </div>
                <div class="slider_data">
                    <div class="inner">
                        <h2 class="heading-txt">My first health checkup</h2>
                        <p>Initiating health journey of young
                            girls with early screening & counseling
                            about body change, periods, hygiene,
                            sexual health and more</p>
                        <div class="tick"><img src="{{asset('assets/images/tick.svg')}}"></div>
                        <ul>
                            <li><img src="{{asset('assets/images/test.svg')}}"> 23 CRITICAL TESTS</li>
                            <li><img src="{{asset('assets/images/blood.svg')}}"> Blood & Urine sample</li>
                        </ul>
                        <a href="#" class="btn">Book Now</a>
                    </div>

                </div>
                <div class="slider_data">
                    <div class="inner">
                        <h2 class="heading-txt">Endometriosis
                            Screening</h2>
                        <p>Expertly crafted multiple diagnosis
                            tests to identify the presence and
                            severity of Endometriosis</p>
                        <div class="tick"><img src="{{asset('assets/images/tick.svg')}}"></div>
                        <ul>
                            <li><img src="{{asset('assets/images/test.svg')}}"> 23 CRITICAL TESTS</li>
                            <li><img src="{{asset('assets/images/blood.svg')}}"> Blood & Urine sample</li>
                        </ul>
                        <a href="#" class="btn">Book Now</a>
                    </div>

                </div>
                <div class="slider_data">
                    <div class="inner">
                        <h2 class="heading-txt">Premarital
                            Counselling</h2>
                        <p>Pre-marriage screening and
                            counselling for new couple
                            before they step into a
                            blooming field of fertility. </p>
                        <div class="tick"><img src="{{asset('assets/images/tick.svg')}}"></div>
                        <ul>
                            <li><img src="{{asset('assets/images/test.svg')}}"> 23 CRITICAL TESTS</li>
                            <li><img src="{{asset('assets/images/blood.svg')}}"> Blood & Urine sample</li>
                        </ul>
                        <a href="#" class="btn">Book Now</a>
                    </div>

                </div>
                <div class="slider_data">
                    <div class="inner">
                        <h2 class="heading-txt">Breast Cancer Screening</h2>
                        <p>Comprehensive woman health
                            check-up encompassing all the
                            critical aspect of women’s health</p>
                        <div class="tick"><img src="{{asset('assets/images/tick.svg')}}"></div>
                        <ul>
                            <li><img src="{{asset('assets/images/test.svg')}}"> 23 CRITICAL TESTS</li>
                            <li><img src="{{asset('assets/images/blood.svg')}}"> Blood & Urine sample</li>
                        </ul>
                        <a href="#" class="btn">Book Now</a>
                    </div>

                </div>
            </div>
            <a href="" class="btn-package">View all</a>
        </div>
    </section>

    <section class="phone-section">
        <div class="Schedule-txt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <h1 class="heading-txt">Schedule your tests easily.</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="pick-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-sx-6 pink-section">
                        <h2 class="heading-txt slide-wrap">Pick a package</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-sx-6">
                        <img src="{{asset('assets/images/phone.svg')}}" style="z-index: 2;">
                    </div>
                </div>
            </div>
        </div>
        <div class="pickup-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6  col-sx-6">
                        <h2 class="heading-txt">Book a pickup appointment</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6  col-sx-6">
                    </div>
                </div>
            </div>
        </div>
        <div class="consult-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6  col-sx-6">
                        <h2 class="heading-txt">Consult a Mayflower doctor</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6  col-sx-6">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="yellow-section">
        <div class="container">
            <div class="row people-section">
                <div class="col-lg-6 col-md-12 col-sm-12 people-txt">
                    <h1 class="heading-txt ">Why people love
                        Mayflower
                    </h1>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 book-box">


                    <!-- here goes what customers say -->
                    <a href="#">233 Reviews on google</a>

                    <div class="testimonial">
                        <div class="slider_data">
                            <q>
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua
                            </q>

                            <p class="author">Diya Dutt</p>
                        </div>

                        <div class="slider_data">
                            <q>
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua
                            </q>
                            <p class="author">Diya Dutt</p>
                        </div>

                        <div class="slider_data">
                            <q>
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua fg
                            </q>
                            <p class="author">Diya Dutt</p>
                        </div>
                    </div>
                    <!-- Next/prev buttons -->



                </div><!-- END slidehow-container -->



            </div>
        </div>
        <div class="container text-center about-section">

            <h1 class="title-heading">About Mayflower</h1>
            <p class="title-sub-heading">Setting New Benchmarks of Excellence<br>
                in Women’s Healthcare</p>
            <div class="row setting-txt hidden-box-one">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <p>After setting new benchmarks in women’s healthcare, Mayflower Women’s Hospital – a pioneer in gynaec endoscopy and laparoscopy, extended its healthcare services with several departments including gynaecology, obstetrics, gastro-intestinal diseases, infertility, foetal medicine, and much more. In our endeavour to provide all solutions under one roof, we are happy to introduce specialized diagnostics service designed for women.</p>
                    <div class="row years-txt">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <h2>18+</h2>
                            <p>Years of care
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <h2>1 lakh+</h2>
                            <p>Happy patients
                            </p>
                        </div>
                    </div>
                    <div class="row years-txt Surgeries">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <h2>80K+</h2>
                            <p>Surgeries
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <h2>20+</h2>
                            <p>Highly Experienced
                                Doctors
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="yellow-circle-box">
                        <div class="yellow-circle"><img src="{{asset('assets/images/yellow-circle.svg')}}"></div>
                        <img src="{{asset('assets/images/doctor.svg')}}">
                    </div>
                </div>
            </div>

        </div>
        </div>




        <div class=" setting-txt hidden-box">
            <div class="container years-txt">
                <div class="row ">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-sx-6">
                        <div class="yellow-circle-box">
                            <div class="yellow-circle"><img src="{{asset('assets/images/yellow-circle.svg')}}"></div>
                            <img src="{{asset('assets/images/doctor.svg')}}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-sx-6">
                        <h2>18+</h2>
                        <p>Years of care
                        </p>

                        <h2>1 lakh+</h2>
                        <p>Happy patients
                        </p>

                        <h2>80K+</h2>
                        <p>Surgeries
                        </p>

                        <h2>20+</h2>
                        <p>Highly Experienced
                            Doctors
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <p>After setting new benchmarks in women’s healthcare, Mayflower Women’s Hospital – a pioneer in gynaec endoscopy and laparoscopy, extended its healthcare services with several departments including gynaecology, obstetrics, gastro-intestinal diseases, infertility, foetal medicine, and much more. In our endeavour to provide all solutions under one roof, we are happy to introduce specialized diagnostics service designed for women.</p>
            </div>
        </div>
        </div>
        </div>




        </div>
    </section>

    <section class="blue-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 call-center col-sx-6">
                    <div class="call-img-box">
                        <img src="{{asset('assets/images/call.png')}}">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 book-box col-sx-6">
                    <h1 class="heading-txt book-txt">Book a free consultation.
                    </h1>
                    <p class="book-txt-p">It’s free, reliable and quick.</p>

                </div>
            </div>
        </div>
    </section>


    @include('layouts.footer')
    <!-- Footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{asset('assets/scripts/bootstrap.bundle.min.js')}}">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{asset('assets/scripts/slick.min.js')}}" type="text/javascript"></script>
    <script>
        $('.multiple-items').slick({
            autoplay: false,
            autoplaySpeed: 1000,
            speed: 1000,
            variableWidth: true,
            draggable: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
        });
        $('.slick-dots li:nth-child(1)').html('<button>Mayflower all in one</button>');
        $('.slick-dots li:nth-child(2)').html('<button>PCOS Screening </button>');
        $('.slick-dots li:nth-child(3)').html('<button>Fertility checkup </button>');
        $('.slick-dots li:nth-child(4)').html('<button>Menopausal </button>');
        $('.slick-dots li:nth-child(5)').html('<button >My first health checkup</button>');
        $('.slick-dots li:nth-child(6)').html('<button>Endometriosis Screening </button>');
        $('.slick-dots li:nth-child(7)').html('<button>Pre-marital counselling</button>');
        $('.slick-dots li:nth-child(8)').html('<button>Breast Care</button>');

        $(document).ready(function() {
            $('.minus').click(function() {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus').click(function() {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });
        });


        $('.testimonial').slick({
            autoplay: false,
            autoplaySpeed: 1000,
            speed: 1000,
            prevArrow: "<span><img src='assets/images/slider-icon.svg' class='comment-prev'></span>",
            nextArrow: "<img src='assets/images/slider-icon.svg' class='comment-next'>",
            draggable: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
        });
    </script>
</body>

</html>