@extends('layouts.welcomeapp')

@section('content')
    <div class="ourpackage">
        <div class="container-fluid">
            <div class="container p-5">
                <div class="row">
                    <div class="text-center">
                        <h3 class="fw-bold">FAQ'S</h3>
                    </div>
                </div>
                <div class="row mt-3 ms-5" style="max-width: 70rem;">
                    <div class="col-sm-5 col-md-5 d-flex justify-content-end">
                        <div class="card text-center my-5 faqs">
                            <h1 class="fw-normal mt-2"><small> Frequently Asked Questions</small></h1>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-7 faqimg">
                        <img src="{{ asset('assets/images/image14.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item accordion-itemfaq">

                @foreach ($faq as $faqData)
                    <h2 class="accordion-header py-3" id="headingOne{{ $faqData->id }}">
                        <button
                            class="accordion-button accordion-buttonfaq fw-bold text-dark {{ $faqData->id == 0 ? 'collapsed' : '' }}"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $faqData->id }}"
                            aria-expanded="false" aria-controls="collapseOne{{ $faqData->id }}">
                            {{ $faqData->question }}
                        </button>
                    </h2>
                    <div id="collapseOne{{ $faqData->id }}"
                        class="accordion-collapse collapse {{ $faqData->id == 1 ? 'show' : '' }}"
                        aria-labelledby="headingOne{{ $faqData->id }}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            {!! $faqData->ans !!}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
