@extends('layouts.welcomeapp')

@section('content')
<div class="section1">
    <div class="container d-flex justify-content-center">
        <div class="pb-5 m-5" style="max-width: 65rem; border:none;">
            <div class="row mt-5">
                <div class="col-md-6 col-sm-6">
                    <h1 class="fw-bold fs-1 font"> Let's talk
                        <p> health first</p>
                    </h1>
                    <div class="row">
                        <div class="col-ms-12 col-sm-12">
                            <button type="button" class="btn sectionbutton2 section1img">BOOK A TEST TODAY</button>
                            <button type="button" class="btn sectionbutton1 section1img">EXPLORE PACKAGES</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <img class="img-fluid section1img" src="{{ asset('assets/images/image10.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</div>

{{-- section 2 --}}
<div class="container">
    <div class="container pb-5 mt-5 d-flex justify-content-center">

        <div class="" style="width: 60rem; border: none;">
            <div>
                <h3 class="fw-bold">Find the right test for me</h3>
                <p class="fw-normal fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
    <div class="container  pb-5 d-flex justify-content-center">
        <div class="row">

            <div class="col-md-9 col-sm-9">
                <div class=" sectioncard2" style="max-width: 45rem;">
                    <div class="card-body">
                        <form action="{{ route('ourpackage') }}" class="fw-bold" method="post" role="form" data-toggle="validator" enctype="multipart/form-data">
                            @csrf
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-container">
                                            <input type="text" name="fname" id="fname" />
                                            <label><i class="bi bi-person-fill" required></i>&nbsp;First
                                                name*</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-container">
                                            <input type="text" name="lname" id="lname" />
                                            <label><i class="bi bi-person-fill"></i>&nbsp;Last
                                                name*</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-container">
                                            <input type="text" name="contact" id="contact" />
                                            <label><i class="bi bi-person-fill"></i>&nbsp;Phone
                                                Number*</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-container">
                                            <input type="text" name="email" id="email" />
                                            <label><i class="bi bi-person-fill"></i>&nbsp;Email*</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="input-container text-white text-center gendercard p-2">
                                            <p class="fw-light">Female</p>
                                            <i class="bi bi-gender-female female"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-container  text-center height p-2">
                                            <p class="fw-light fw-bold">Height</p>
                                            <nav>
                                                <div class="nav nav-tabs mb-2" id="nav-tab" role="tablist" style="border: 2px solid black; border-radius:15px;">
                                                    <button class="nav-link text-dark feet1 active" id="nav-feet-tab" data-bs-toggle="tab" data-bs-target="#nav-feet" type="button" role="tab" aria-controls="nav-feet" aria-selected="true">Feet</button>
                                                    <button class="nav-link text-dark feet1" id="nav-in-tab" data-bs-toggle="tab" data-bs-target="#nav-in" type="button" role="tab" aria-controls="nav-in" aria-selected="false">In</button>
                                                    <button class="nav-link text-dark feet1" id="nav-cm-tab" data-bs-toggle="tab" data-bs-target="#nav-cm" type="button" role="tab" aria-controls="nav-cm" aria-selected="false">Cm</button>
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade active show" id="nav-feet" role="tabpanel" aria-labelledby="nav-feet-tab">
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" class="form-control bg-white border1" placeholder="" aria-label="nav-feet-tab" id="ftHeight" name="ftHeight">feet
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" class="form-control bg-white border1" placeholder="" aria-label="nav-feet-tab" id="inHeight" name="inHeight">in
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-in" role="tabpanel" aria-labelledby="nav-in-tab">
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" class="form-control bg-white border1" placeholder="" aria-label="nav-feet-tab" id="inches" name="inches">inches
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-cm" role="tabpanel" aria-labelledby="nav-cm-tab">
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" class="form-control bg-white border1" placeholder="" aria-label="nav-feet-tab" id="height" name="height">cm
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 familyhistory1">
                                        <div class="input-container  text-start familyhistory p-2">
                                            <p class="fw-light fw-bold">Family History</p>
                                            <div class="d-flex justify-content-between">
                                                <div class="col">
                                                    <i class="bi familyicon1 bi-lungs-fill" id="cancer"></i>
                                                    <small class="fw-light">Cancer</small>
                                                </div>
                                                <div class="col">
                                                    <i class="bi familyicon1 bi-optical-audio-fill" id="diabetes"></i>
                                                    <small class="fw-light">Diabetes</small>
                                                </div>
                                                <div class="col">
                                                    <i class="bi familyicon1 bi-heart-fill" id="bloodpressure"></i>
                                                    <small class="fw-light">Blood pressure</small>
                                                </div>
                                                <div class="col">
                                                    <i class="bi familyicon1 bi-person-fill" id="obesity"></i>
                                                    <small class="fw-light">Obesity</small>
                                                </div>
                                                <div class="col">
                                                    <i class="bi familyicon1 bi-piggy-bank-fill" id="mentalillness"></i>
                                                    <small class="fw-light">Mental illness</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="input-container  text-center age p-2">
                                            <div class="form-group form-spinner mt-3">
                                                <label for="spinner1">Age</label>
                                                <div class="spinner-control">

                                                    <div class="min-max d-flex justify-content-between">
                                                        <input type="button" value="-" class="button-minus  mx-1 border-0 fw-bold" data-field="age">
                                                        <input type="number" step="1" max="" value="1" name="age" id="age" class="age-field border-0 fw-bold text-center">
                                                        <input type="button" value="+" class="button-plus border-0 fw-bold" data-field="age">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="input-container  text-center age p-2">
                                            <div class="form-group form-spinner mt-3">
                                                <label for="spinner1">weight</label>
                                                <div class="min-max d-flex justify-content-between">
                                                    <input type="button" value="-" class="button-minus  mx-1 border-0 fw-bold" data-field="weight">
                                                    <input type="number" step="1" max="" value="1" name="weight" id="weight" class="weight-field border-0 fw-bold text-center">
                                                    <input type="button" value="+" class="button-plus border-0 fw-bold" data-field="weight">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="input-container  text-start familyhistory p-2">
                                            <p class="fw-light fw-bold">Your medical history if any</p>
                                            <div class="row">
                                                <div class="col-8">
                                                    <hr>
                                                    <hr>
                                                </div>
                                                <div class="col-3">
                                                    <hr>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-container ms-3">
                                <button type="submit" class="btn sectionbutton3 calculate" id="submit">SUBMIT
                                    <i class="bi bi-check2 circleicon1"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 mt-2 text-center">
                <div class="card1img">
                    <img src="{{ asset('assets/images/image6.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

{{-- section 3 --}}
<div class="container pb-5 mb-5 mt-5 d-flex justify-content-center">

    <div class="card section3 pt-5 pb-5 mb-5 " style="width: 60rem;">
        <div>
            <h4 class="fw-bold text-center mt-1">Our Packages</h4>
            <p class="text-center"> Stay on top of your health with our <br>
                Packages for all your healthcare needs.
            </p>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 nav" id="nav-tab" role="tablist">
                    <nav>
                        <?php
                        $count = 0;
                        ?>
                        @if(count($package) != 0)
                        @foreach($package as $package)
                        @php
                        $count++;
                        @endphp

                        @if($count < 5) @if($count%2==0) <div class="d-flex justify-content-start">
                            <button class="mayflower1 nav-link allinonebtn" id="nav-allinone-tab" data-bs-toggle="tab" data-bs-target="#nav-allinone" type="button" role="tab" aria-controls="nav-allinone" aria-selected="true" data-bs-slide="allinone" onclick="tabHandler('{{$package->id}}');">{{$package->packageName}}</button>
                </div>
                @else
                <div class="d-flex justify-content-end mt-5">
                    <button class="mayflower2 nav-link allinonebtn" id="nav-fertility-tab" data-bs-toggle="tab" data-bs-target="#nav-fertility" type="button" role="tab" aria-controls="nav-fertility" aria-selected="false" data-bs-slide="fertility" onclick="tabHandler('{{$package->id}}');">{{$package->packageName}}</button>
                </div>

                @endif
                @endif
                @endforeach
                @endif
                </nav>
            </div>

            <div class="tab-content col-sm-6 col-md-6 mt-2 " id="nav-tabContent">

                <div class="tab-pane flade active show ms-4" id="nav-allinone" role="tabpanel" aria-labelledby="nav-allinone-tab">
                    <div class="card d-flex justify-content-center section3card pb-5 mb-5 cardall" style="max-width: 25rem;">
                        <div class="row">
                            <div class="col-9">
                                <h6 id="packageName" class="section-card">Mayflower all in one</h6>
                                <div>
                                    <p id="description">Comprehensive women health check-up encompassing all the critical
                                        aspect of
                                        women's
                                        health.</p>
                                </div>
                                <div class="fw-bold">
                                    <p><i class="bi bi-chat-left-text"></i> <span id="counter">23</span> CRITICAL TESTS</p>
                                    <p><i class="bi bi-eyedropper"></i> BLOOD & URINE SAMPLE</p>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <button type="button" class="btn sectionbutton3">BOOK
                                            NOW &nbsp;
                                            <i class="bi bi-check2 circleicon1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3 mt-2 cardiconour">
                                <img src="{{ asset('assets/images/image11.png') }}" class="card-img-top images1 img-fluid" alt="...">
                                <i class="cardimageour">
                                    <p class="bi bi-check" style="margin-top: -10px; margin-left: -5px;"> </p>
                                </i>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="tab-pane fade ms-4" id="nav-fertility" role="tabpanel" aria-labelledby="nav-fertility-tab">
                    <div class="card d-flex justify-content-center section3card pb-5 mb-5" style="width: 25rem;">
                        <div class="row">
                            <div class="col-9">
                                <h6 class="section-card">Fertility checkup</h6>
                                <div>
                                    <p>Comprehensive women health check-up encompassing all the critical
                                        aspect of
                                        women's
                                        health.</p>
                                </div>
                                <div class="fw-bold">
                                    <p><i class="bi bi-chat-left-text"></i> 23 CRITICAL TESTS</p>
                                    <p><i class="bi bi-eyedropper"></i> BLOOD & URINE SAMPLE</p>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <button type="button" class="btn sectionbutton3">BOOK
                                            NOW &nbsp;
                                            <i class="bi bi-check2 circleicon1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3 mt-2 cardiconour">
                                <img src="{{ asset('assets/images/image11.png') }}" class="card-img-top images1 img-fluid" alt="...">
                                <i class="cardimageour">
                                    <p class="bi bi-check" style="margin-top: -10px; margin-left: -5px;"> </p>
                                </i>

                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade ms-4" id="nav-myfirsthealthcheckup" role="tabpanel" aria-labelledby="nav-myfirsthealthcheckup-tab">
                    <div class="card d-flex justify-content-center section3card pb-5 mb-5" style="width: 25rem;">
                        <div class="row">
                            <div class="col-9">
                                <h6 class="section-card">My first health checkup</h6>
                                <div>
                                    <p>Comprehensive women health check-up encompassing all the critical
                                        aspect of
                                        women's
                                        health.</p>
                                </div>
                                <div class="fw-bold">
                                    <p><i class="bi bi-chat-left-text"></i> 23 CRITICAL TESTS</p>
                                    <p><i class="bi bi-eyedropper"></i> BLOOD & URINE SAMPLE</p>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <button type="button" class="btn sectionbutton3">BOOK
                                            NOW &nbsp;
                                            <i class="bi bi-check2 circleicon1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3 mt-2 cardiconour">
                                <img src="{{ asset('assets/images/image11.png') }}" class="card-img-top images1 img-fluid" alt="...">
                                <i class="cardimageour">
                                    <p class="bi bi-check" style="margin-top: -10px; margin-left: -5px;"> </p>
                                </i>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade ms-4" id="nav-premaritalcounselling" role="tabpanel" aria-labelledby="nav-premaritalcounselling-tab">
                    <div class="card d-flex justify-content-center section3card pb-5 mb-5" style="width: 25rem;">
                        <div class="row">
                            <div class="col-9">
                                <h6 class="section-card">Pre-marital counselling</h6>
                                <div>
                                    <p>Comprehensive women health check-up encompassing all the critical
                                        aspect of
                                        women's
                                        health.</p>
                                </div>
                                <div class="fw-bold">
                                    <p><i class="bi bi-chat-left-text"></i> 23 CRITICAL TESTS</p>
                                    <p><i class="bi bi-eyedropper"></i> BLOOD & URINE SAMPLE</p>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <button type="button" class="btn sectionbutton3">BOOK
                                            NOW &nbsp;
                                            <i class="bi bi-check2 circleicon1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3 mt-2 cardiconour">
                                <img src="{{ asset('assets/images/image11.png') }}" class="card-img-top images1 img-fluid" alt="...">
                                <i class="cardimageour">
                                    <p class="bi bi-check" style="margin-top: -10px; margin-left: -5px;"> </p>
                                </i>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade ms-4" id="nav-pocos" role="tabpanel" aria-labelledby="nav-pocos-tab">
                    <div class="card d-flex justify-content-center section3card pb-5 mb-5" style="width: 25rem;">
                        <div class="row">
                            <div class="col-9">
                                <h6 class="section-card">POCOS Screening</h6>
                                <div>
                                    <p>Comprehensive women health check-up encompassing all the critical
                                        aspect of
                                        women's
                                        health.</p>
                                </div>
                                <div class="fw-bold">
                                    <p><i class="bi bi-chat-left-text"></i> 23 CRITICAL TESTS</p>
                                    <p><i class="bi bi-eyedropper"></i> BLOOD & URINE SAMPLE</p>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <button type="button" class="btn sectionbutton3">BOOK
                                            NOW &nbsp;
                                            <i class="bi bi-check2 circleicon1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3 mt-2 cardiconour">
                                <img src="{{ asset('assets/images/image11.png') }}" class="card-img-top images1 img-fluid" alt="...">
                                <i class="cardimageour">
                                    <p class="bi bi-check" style="margin-top: -10px; margin-left: -5px;"> </p>
                                </i>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade ms-4" id="nav-menopausal" role="tabpanel" aria-labelledby="nav-menopausal-tab">
                    <div class="card d-flex justify-content-center section3card pb-5 mb-5" style="width: 25rem;">
                        <div class="row">
                            <div class="col-9">
                                <h6 class="section-card">Menopausal</h6>
                                <div>
                                    <p>Comprehensive women health check-up encompassing all the critical
                                        aspect of
                                        women's
                                        health.</p>
                                </div>
                                <div class="fw-bold">
                                    <p><i class="bi bi-chat-left-text"></i> 23 CRITICAL TESTS</p>
                                    <p><i class="bi bi-eyedropper"></i> BLOOD & URINE SAMPLE</p>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <button type="button" class="btn sectionbutton3">BOOK
                                            NOW &nbsp;
                                            <i class="bi bi-check2 circleicon1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3 mt-2 cardiconour">
                                <img src="{{ asset('assets/images/image11.png') }}" class="card-img-top images1 img-fluid" alt="...">
                                <i class="cardimageour">
                                    <p class="bi bi-check" style="margin-top: -10px; margin-left: -5px;"> </p>
                                </i>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade ms-4" id="nav-screening" role="tabpanel" aria-labelledby="nav-screening-tab">
                    <div class="card d-flex justify-content-center section3card pb-5 mb-5" style="width: 25rem;">
                        <div class="row">
                            <div class="col-9">
                                <h6 class="section-card">Endometriosis Screening</h6>
                                <div>
                                    <p>Comprehensive women health check-up encompassing all the critical
                                        aspect of
                                        women's
                                        health.</p>
                                </div>
                                <div class="fw-bold">
                                    <p><i class="bi bi-chat-left-text"></i> 23 CRITICAL TESTS</p>
                                    <p><i class="bi bi-eyedropper"></i> BLOOD & URINE SAMPLE</p>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <button type="button" class="btn sectionbutton3">BOOK
                                            NOW &nbsp;
                                            <i class="bi bi-check2 circleicon1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3 mt-2 cardiconour">
                                <img src="{{ asset('assets/images/image11.png') }}" class="card-img-top images1 img-fluid" alt="...">
                                <i class="cardimageour">
                                    <p class="bi bi-check" style="margin-top: -10px; margin-left: -5px;"> </p>
                                </i>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 -->
            </div>

            {{-- <div class="col-sm-4 col-md-4"> --}}
            <div class="col-sm-3 col-md-3 nav" id="nav-tab" role="tablist">
                <nav>
                    <?php
                    $count = 0;
                    ?>
                    @if(count($package2) != 0)
                    @foreach($package2 as $package2)
                    @php
                    $count++;
                    @endphp

                    @if($count > 4) @if($count%2==0) <div class="d-flex justify-content-start">
                        <button class="mayflower1 nav-link allinonebtn " id="nav-allinone-tab" data-bs-toggle="tab" data-bs-target="#nav-allinone" type="button" role="tab" aria-controls="nav-allinone" aria-selected="true" data-bs-slide="allinone" onclick="tabHandler('{{$package2->id}}');">{{$package2->packageName}}</button>
                    </div>
                    @else
                    <div class="d-flex justify-content-end mt-5">
                        <button class="mayflower2 nav-link allinonebtn" id="nav-fertility-tab" data-bs-toggle="tab" data-bs-target="#nav-fertility" type="button" role="tab" aria-controls="nav-fertility" aria-selected="false" data-bs-slide="fertility" onclick="tabHandler('{{$package2->id}}');">{{$package2->packageName}}</button>
                    </div>

                    @endif
                    @endif
                    @endforeach
                    @endif

                </nav>
            </div>

        </div>
    </div>
</div>
</div>

{{-- section 4 --}}
<div class="container-fluid ">
    <div class="row row1 pb-5 my-2" id="row1">
        <h3>Schedule your tests easily.</h3>
    </div>
    <div class="col-md-12 col-sm-12 section4col d-flex justify-content-end mt-5" style="z-index: 1; height:100%; width:90%;">
        <img src="{{ asset('assets/images/mobile.jpg') }}" width="50px" class="sectionimage img-fluid" id="images" alt="Responsive image">
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
{{-- section 4 end --}}

{{-- section 5 --}}
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt
                            ut labore et dolore manage aliqua.</p>
                        <p class="author">Diya Dutt</p>
                    </div>

                    <div class="mySlides">
                        <a href="" class="fw-bold reviews">233 Reviews on google</a>
                        <p class="mt-3 fw-bold">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt
                            ut labore et dolore manage aliqua.</p>
                        <p class="author">Radha Sharma</p>
                    </div>

                    <div class="mySlides">
                        <a href="" class="fw-bold reviews">233 Reviews on google</a>
                        <p class="mt-3 fw-bold">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt
                            ut labore et dolore manage aliqua. Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dolore nobis perferendis vero numquam quaerat neque quidem adipisci tempore quam fuga odio hic, mollitia explicabo?</p>
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


    <div class="container d-flex justify-content-center">

        <div class=" section4 pb-5 mb-5 " style="max-width: 65rem; border:none;">
            <div>
                <h2 class="fw-bold text-center mt-1">About Mayflower</h2>
                <h4 class="text-center mt-3"> Setting New Benchmarks of Excellence <br>
                    in Women's Healthcare
                </h4>
            </div>

            <div class="row mt-5">
                <div class="col-md-5 col-sm-5">
                    <P class="fs-6">{!! $aboutus->text !!}</P>
                </div>
                <div class="col-md-5 col-sm-5  d-flex justify-content-center">
                    <img class="img-fluid" src="{{ asset('assets/images/hospital.jpg') }}">

                </div>
                <div class="col-md-2 col-sm-2 mt-5 aboutmayflower">
                    <div>
                        <h1 class="fw-bold">18+</h1>
                        <p>Years of care</p>
                    </div>
                    <hr style="border: 2px solid pink; margin-left: -23px; max-width: 150px;">
                    <div>
                        <h1 class="fw-bold">1 lakh+</h1>
                        <p>Happy Patients</p>
                    </div>
                    <hr style="border: 2px solid pink; margin-left: -23px; max-width: 150px;">
                    <div>
                        <h1 class="fw-bold">80k+</h1>
                        <p>Surgeries</p>
                    </div>
                    <hr style="border: 2px solid pink; margin-left: -23px; max-width: 150px;">
                    <div>
                        <h1 class="fw-bold">20+</h1>
                        <p>Highly Experienced Doctors</p>
                    </div>
                    <hr style="border: 2px solid pink; margin-left: -23px; max-width: 150px;">
                </div>
            </div>
        </div>
    </div>
</div>
{{-- section 5 end --}}

{{-- section 6 --}}
<div class="section6">
    <div class="container p-5">
        <div class="row">
            <div class="col-sm-6 col-md-6 text-center sectionicon">
                <i class="bi bi-telephone-fill sectionicons"></i>
            </div>
            <div class="col-sm-6 col-md-6 text-center text-capitalize sectiontext">
                <h3>Book a free consulation.</h3>
                <p class="font-weight-light">It's free, reliable and quick.</p>
            </div>
        </div>
    </div>
</div>


{{-- section 6 end --}}

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

{{-- age script --}}
<script>
    $(document).ready(function() {
        $(".form-spinner input").each(function(i, spinner) {
            if ($(this).data("type") === "text") {
                let index = $(this).data("spinner-index") || 0;
                let items = $(this).data("spinner-items");

                $(this).val(items[index]);
            }
        });

        $(".form-spinner .btn-increment").click(function() {
            let $this = $(this);
            let input = $this.siblings("input");

            if (input.data("type") === "number") {
                let step = input.attr("step");
                let oldValue = input.val();
                let newValue = parseInt(oldValue) + parseInt(step || 1);
                let maxValue = input.attr("max");
                let minValue = input.attr("min");

                if (!maxValue || newValue <= maxValue)
                    input.val(newValue);
                else if (input.data("spinner-loop"))
                    input.val(minValue);
                else
                    input.val(maxValue);
            } else if (input.data("type") === "text") {
                let oldIndex = input.data("spinner-index") || 0;
                let items = input.data("spinner-items");
                let newIndex = oldIndex + 1;

                if (newIndex < items.length) {
                    input.val(items[newIndex]);
                    input.data("spinner-index", newIndex);
                } else if (input.data("spinner-loop")) {
                    input.val(items[0]);
                    input.data("spinner-index", 0);
                }
            }

        });
        $(".form-spinner .btn-decrement").click(function() {
            let $this = $(this);
            let input = $this.siblings("input");

            if (input.data("type") === "number") {
                let step = input.attr("step");
                let oldValue = input.val();
                let newValue = parseInt(oldValue) - parseInt(step || 1);
                let maxValue = input.attr("max");
                let minValue = input.attr("min");

                if (!minValue || newValue >= minValue)
                    input.val(newValue);
                else if (input.data("spinner-loop"))
                    input.val(maxValue);
                else
                    input.val(minValue);
            } else if (input.data("type") === "text") {
                let oldIndex = input.data("spinner-index") || 0;
                let items = input.data("spinner-items");
                let newIndex = oldIndex - 1;

                if (newIndex >= 0) {
                    input.val(items[newIndex]);
                    input.data("spinner-index", newIndex);
                } else if (input.data("spinner-loop")) {
                    input.val(items[items.length - 1]);
                    input.data("spinner-index", items.length - 1);
                }
            }
        });
    });
</script>

<script>
    function incrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal)) {
            parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(0);
        }
    }

    function decrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal) && currentVal > 0) {
            parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(0);
        }
    }

    $('.min-max').on('click', '.button-plus', function(e) {
        incrementValue(e);
    });

    $('.min-max').on('click', '.button-minus', function(e) {
        decrementValue(e);
    });
</script>
<script>
    $("#cancer").click(function() {
        $("#cancer").toggleClass('cancer-clicked');
    });
    $("#diabetes").click(function() {
        $("#diabetes").toggleClass('diabetes-clicked');
    });
    $("#bloodpressure").click(function() {
        $("#bloodpressure").toggleClass('bloodpressure-clicked');
    });
    $("#obesity").click(function() {
        $("#obesity").toggleClass('obesity-clicked');
    });
    $("#mentalillness").click(function() {
        $("#mentalillness").toggleClass('mentalillness-clicked');
    });
</script>

{{-- card all btn --}}
<script>
    const buttons = document.querySelectorAll('.allinonebtn');

    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            // Reset background color of all buttons
            buttons.forEach((allinonebtn) => {
                allinonebtn.classList.remove('active');
            });
            // Set background color of clicked button
            button.classList.add('active');
        });
    });
</script>

<script>
    const buttons = document.querySelectorAll('.feet1');

    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            // Reset background color of all buttons
            buttons.forEach((feet1) => {
                feet1.classList.remove('active');
            });
            // Set background color of clicked button
            button.classList.add('active');
        });
    });
</script>

<script>
    function tabHandler(id) {
        let tabUrl = 'api/getTabData/' + id
        $.ajax({
            url: tabUrl,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // $('#counter').text(data.counter);
                if (data.length > 0) {
                    $('#packageName').text(data[0].packageName);
                    $('#description').text(data[0].description);
                }

            }
        });
    }
</script>
@endsection