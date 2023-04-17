@extends('layouts.welcomeapp')

@section('content')
<div id="app">
    <main class="py-4">
        <div class="container">
            <div class="row">

                <div class="col-md-6 offset-3 col-md-offset-6">


                    @if($message = Session::get('error'))
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong>Error!</strong> {{ $message }}
                    </div>
                    @endif
                    <div class="alert alert-success success-alert alert-dismissible fade show" role="alert" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong>Success!</strong> <span class="success-message"></span>
                    </div>
                    {{ Session::forget('success') }}

                    <div class="card card-default">
                        <div class="card-header">
                            Payment
                        </div>

                        <div class="card-body text-center">
                            <div class="form-group mt-1 mb-1">
                                <input type="text" name="amount" id="amountPrice" readonly class="form-control amount" placeholder="Enter Amount">
                            </div>
                            <button id="rzp-button1" class="btn btn-success btn-lg">Pay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    $('#amountPrice').val('{{$book->price}}')

    $('body').on('click', '#rzp-button1', function(e) {
        e.preventDefault();
        var amount = $('.amount').val();
        var total_amount = amount * 100;
        var options = {
            "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard
            "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
            "currency": "INR",
            "name": "Mayflower",
            "description": "Buy Package",
            "image": "https://www.nicesnippets.com/image/imgpsh_fullsize.png",
            "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function(response) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: "{{ route('payment') }}",
                    data: {
                        razorpay_payment_id: response.razorpay_payment_id,
                        amount: amount
                    },
                    success: function(data) {
                        $('.success-message').text(data.success);
                        $('.success-alert').fadeIn('slow', function() {
                            $('.success-alert').delay(5000).fadeOut();
                        });
                        $('.amount').val('');
                    }
                });
            },
            "prefill": {
                "name": "{{$book->name}}",
                "email": "{{$book->email}}",
                "contact": "{{$book->contact}}"
            },
            "notes": {
                "address": ""
            },
            "theme": {
                "color": "#fe9191"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    });
</script>
@endsection