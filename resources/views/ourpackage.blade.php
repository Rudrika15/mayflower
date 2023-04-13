@extends('layouts.welcomeapp')

@section('content')
    <div class="ourpackage">
        <div class="container-fluid">
            <div class="container pb-5">
                <div class="row">
                    <div class="col m-5 text-center">
                        <h3 class="fw-bold">Our Packages</h3>
                        <h4 class="fw-normal"><small> Stay on top of your health with our <br> Packages for all
                                your
                                healthcare needs.</small></h4>
                    </div>
                </div>
                <div class="row d-flex  justify-content-center pb-5">
                    <div class="col text-center">
                        <button type="button" class="btn btnourpackage active fw-bold">Mayflower all in one </button>
                        {{-- <hr class="row line3 d-flex justify-content-center"> --}}


                        <a href="#"><button type="button" class="btn btn btnourpackage"> PCOS</button></a>

                        <button type="button" class="btn btnourpackage">Menopausal</button>

                        <button type="button" class="btn btnourpackage">Endometriosis</button>

                        <button type="button" class="btn btnourpackage">Fertility</button>

                        <button type="button" class="btn btnourpackage">Adolescent</button>

                        <button type="button" class="btn btnourpackage">Pre-marital</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid ourpackage1 pb-5">
        <div class="container">
            <div class="row d-flex justify-content-center">

                <div class="row ourpackagecards">
                    <div class="col-md-7 d-flex justify-content-end">
                        <div class="card ourpackagecard" style="width: 33rem;">
                            <div class="card-body fw-bold fs-5">
                                Comprehensive women health check-up encompassing all the critical aspect of women's health.
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5 d-flex justify-content-start mt-1">
                        <div class="card ourpackagecard1" style="width: 19rem;">
                            <img src="{{ asset('assets/images/image7.jpg') }}"
                                class="card-img-top img-fluid ourpackagecardimg" alt="...">
                            <h4 class="ourpackagecardimg1">Rs. 21,400</h4>
                            <div class="card-body">
                                <div class="col d-flex justify-content-center">
                                    <button type="button" class="btn btn btnourpackagecard">Add to cart</button>
                                    <button type="button" class="btn btnourpackagecard1">Buy now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="row justify-content-center mt-3">
                    <div class="col-md-7 d-flex justify-content-end ourpackagecards1 mt-1">
                        <div class="card ourpackagecard2" style="width: 33rem;">
                            <div class="card-body fw-bold fs-5">
                                <div class="row">
                                    <div class="col-1 d-flex justify-content-start fw-bold">
                                        <i class="bi bi-house-door-fill square2"></i>&nbsp;&nbsp;
                                    </div>
                                    <div class="col">
                                        <h6 class="fw-bold">Blood & Urine Sample</h6>
                                        @if ($youare != '')
                                            <div class="">Test Suggestions for you
                                                <hr class="row line5">

                                                <div class="col text-center mb-3">
                                                    <input class="fw-bold ps-5" name="bmi" id="bmi"
                                                        value="{{ $youare }}"
                                                        style="border-radius: 15px; background-color: white;">
                                                    <input type="hiddenn" name="bmi" id="bmi"
                                                        value="{{ $youare }}">
                                                </div>
                                                @if ($youare == 'You are Underweight')
                                                    <dl class="pink-color">
                                                        <button type="button" class="black-color"
                                                            style="border-radius: 15px; background-color: pink;"> Cancer
                                                        </button>
                                                        <p>- healthy headstart, breast cancer screening</p>
                                                        <button type="button" class="black-color"
                                                            style="border-radius: 15px; background-color: pink;"> Diabetes
                                                        </button>
                                                        <p>- healthy headstart, PCOS screening</p>
                                                        <button type="button" class="black-color"
                                                            style="border-radius: 15px; background-color: pink;"> Blood
                                                            Pressure </button>
                                                        <p>- healthy headstart, PCOS screening</p>
                                                    </dl>
                                                @elseif($youare == 'You are Overweight')
                                                    <dl class="pink-color">
                                                        <button type="button" class="black-color"
                                                            style="border-radius: 15px; background-color: pink;"> Cancer
                                                        </button>
                                                        <p>- healthy headstart, breast cancer screening, PCOS</p>
                                                        <button type="button" class="black-color"
                                                            style="border-radius: 15px; background-color: pink;"> Diabetes
                                                        </button>
                                                        <p>- healthy headstart, PCOS screening</p>
                                                        <button type="button" class="black-color"
                                                            style="border-radius: 15px; background-color: pink;"> Blood
                                                            Pressure </button>
                                                        <p>- healthy headstart, PCOS screening</p>
                                                    </dl>
                                                @else
                                                    <dl class="pink-color">
                                                        <button type="button" class="black-color"
                                                            style="border-radius: 15px; background-color: pink;"> Cancer
                                                        </button>
                                                        <p>- healthy headstart, breast cancer screening, PCOS</p>
                                                        <button type="button" class="black-color"
                                                            style="border-radius: 15px; background-color: pink;"> Diabetes
                                                        </button>
                                                        <p>- healthy headstart, PCOS screening</p>
                                                        <button type="button" class="black-color"
                                                            style="border-radius: 15px; background-color: pink;"> Blood
                                                            Pressure </button>
                                                        <p>- healthy headstart, PCOS screening</p>
                                                    </dl>
                                                @endif
                                            </div>
                                        @endif
                                        <p>collection from home</p>
                                    </div>
                                </div>
                                <hr class="row line1">
                                <div class="row task">

                                    <input type="hiddenn" id="testId" name="testId" value="{{ $data->id }}">

                                    @foreach ($test as $test)
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <button type="button"
                                                class="ourpackagecard2btn fw-bold">{{ $test->testName }}</button>

                                            @foreach ($testdetail->where('testId', '=', $test->id) as $testdetailData)
                                                <div class="mt-1 text ">
                                                    {{-- <input type="checkbox" name="testdetail[]" id="testdetail" value= {{$testdetailData->testDetailName }}> --}}
                                                    <label style="font-size: 15px;">
                                                        {{ Form::checkbox('testdetail[]', $testdetailData->id, false, ['class' => 'bloodsugar', 'name' => 'checkbox','value' => '$testdetailData->testDetailName']) }}
                                                        {{ $testdetailData->testDetailName }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5  justify-content-start mt-1">
                        <div class="card ourpackagecardscard" style="width: 19rem;">
                            <div class="card-body">
                                <div class="col d-flex justify-content-start fw-bold">
                                    <i class="bi bi-arrow-right"></i>&nbsp;&nbsp;
                                    <p>8-10 hours of fasting | Morning tests</p>
                                </div>
                                <div class="col d-flex justify-content-start fw-bold">
                                    <i class="bi bi-lamp"></i>
                                    &nbsp;&nbsp;
                                    <p>Blood and Urine Sample required</p>
                                </div>
                                <div class="col d-flex justify-content-start fw-bold">
                                    <i class="bi bi-search"></i>&nbsp;&nbsp;
                                    <p>Free consultation of experts</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-5 justify-content-start mt-3">
                            <div class="card ourpackagecardscard" style="width: 19rem;">
                                <div class="card-body">
                                    <div class="row mt-2">
                                        <div class="col-1 d-flex justify-content-start fw-bold">
                                            <i class="fa fa-plus fa-3x square3" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div class="col ms-4">
                                            <h6 class="fw-bold">Tests done at</h6>
                                            <p class="fw-bold">Mayflower Clinic</p>
                                        </div>
                                    </div>
                                    <hr class="row line2">
                                    <div class="col mt-4">
                                        <button type="button" class="ourpackagecard2btn fw-bold">BMI</button>
                                    </div>

                                    <div class="col fw-bold mt-4">
                                        <button type="button" class="ourpackagecard2btn fw-bold">RADIOLOGY
                                            IMAGING</button>
                                        <ul class="mt-2 square1">
                                            <li class="bloodsugar">Chest X Ray</li>
                                            <li class="bloodsugar">USG Abdomen</li>
                                            <li class="bloodsugar">USG Pelvis & Follicular/Ovulation Study</li>
                                            <li class="bloodsugar">USG KUB</li>
                                        </ul>
                                    </div>

                                    <div class="col fw-bold mt-3">
                                        <button type="button" class="ourpackagecard2btn fw-bold">MAMMOGRAPHY</button>
                                        <ul class="mt-2 square1">
                                            <li class="bloodsugar">Sono-mammography</li>
                                        </ul>
                                    </div>

                                    <div class="col fw-bold mt-3">
                                        <button type="button" class="ourpackagecard2btn fw-bold">CANCER
                                            DETECTION</button>
                                        <ul class="mt-2 square1">
                                            <li class="bloodsugar">Pap-smear</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-3">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div class=" ourpackagecard6" style="width: 54rem;">
                        <div class="card-body fw-bold text-white fs-6">
                            Get the
                            <br>
                            Expert consultation of
                            <img src="{{ asset('assets/images/image8.jpg') }}" class="card-img-left img-fluid ourbtnimg"
                                alt="...">
                            <button type="button" class="btn btn-dark ourbtn">Physician</button>
                            <img src="{{ asset('assets/images/image9.jpg') }}" class="card-img-left img-fluid ourbtnimg"
                                alt="...">&nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-dark ourbtn"> Gynaecologist</button>
                            <img src="{{ asset('assets/images/image8.jpg') }}" class="card-img-left img-fluid ourbtnimg"
                                alt="...">&nbsp;
                            <button type="button" class="btn btn-dark ourbtn">Nutritionist</button>
                            <img src="{{ asset('assets/images/image9.jpg') }}" class="card-img-left img-fluid ourbtnimg"
                                alt="...">&nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-dark ourbtn">Conmetologist</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row row1" id="row1">
            <h3>Schedule your tests easily.</h3>
        </div>
        <div class="col-md-12 col-sm-12 section4col d-flex justify-content-end"
            style="z-index: 1; height:100%; width:90%;">
            <img src="{{ asset('assets/images/mobile.jpg') }}" width="50px" class="sectionimage img-fluid"
                id="images" alt="Responsive image">
        </div>
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div>
                    <div data-aos="fade-right" data-aos-duration="1000">
                        <div class="row row2" id="row2">

                            <h3>Sign up</h3>
                            <p>Fill in your contact information and verify your account.</p>
                        </div>
                    </div>
                    <div data-aos="fade-right" data-aos-duration="2000">
                        <div class="row row3" id="row3">
                            <h3>Pick a Package</h3>
                            <p>Try the survey or check out the package specifications.</p>
                        </div>
                    </div>
                    <div data-aos="fade-right" data-aos-duration="3000">
                        <div class="row row4" id="row4">
                            <h3>Book your appoinment</h3>
                            <p>Your booking will be synced to your calender.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid section4">

        <div class="pb-5 ">
            <div class="container slide1" style="max-width: 65rem;">
                <div class="slideshow-container slider2 row">
                    <div class="col-md-6 col-sm-6" style="text-align:center; margin-top: 10%;">
                        <h3 class="slides1 fw-bold">Why people love </h3>
                        <h3 class="slides1 fw-bold">Mayflower</h3>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="mySlides">
                            <a href="" class="fw-bold reviews">233 Reviews on google</a>
                            <p class="mt-3 fw-bold">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore manage aliqua.</p>
                            <p class="author">Diya Dutt</p>
                        </div>

                        <div class="mySlides">
                            <a href="" class="fw-bold reviews">233 Reviews on google</a>
                            <p class="mt-3 fw-bold">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore manage aliqua.</p>
                            <p class="author">Radha Sharma</p>
                        </div>

                        <div class="mySlides">
                            <a href="" class="fw-bold reviews">233 Reviews on google</a>
                            <p class="mt-3 fw-bold">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore manage aliqua.</p>
                            <p class="author">Mrs. Snjana Shah</p>
                        </div>

                        <div class="text-center mb-3">
                            <span class="dot Active" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                    {{-- <a class="prev" onclick="plusSlides(-1)">❮</a> --}}
                    <a class="next" onclick="plusSlides(1)">❯</a>

                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
        $('.task').on('click', function() {
            var $this = $(this);
            $.ajax({
                data: {
                    id: $('#testId').val(),
                    detail: $(this).val(),
                    _token: '{!! csrf_token() !!}'
                },
                url: "{{ route('ourpackage.updateData') }}",
                type: 'POST',
                dataType: 'json'
            });
        });
    </script>


@endsection
