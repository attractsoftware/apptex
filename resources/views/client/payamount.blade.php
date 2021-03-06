@extends('client.layouts.layout')

@section('contents')

<section class="w3l-pricing1 py-5 mt-5">
    <div class="container py-lg-3 mt-3">
        <div class="heading text-center mx-auto">
            <h3 class="head">Thanks M/s {{$data['name']}} </h3>
            {{--<a href="#comparision" class="comparision mt-3">View Plan Comparision</a>--}}
        </div>
        <div class="row">
            {{--<div class="col-md-4">
                <div class="mt-5 price-card price-card1 p-lg-4 p-md-3 p-4">
                    <div class="card-header p-0 card-heading">
                        <h4 class="mb-4">Free</h4>
                    </div>
                    <div class="card-body p-0">
                        <h1 class="card-title pricing-card-title my-price-title">$0<small class="text-dull">/month</small></h1>
                        <p>Connect with decision makers before your competitors do.</p>
                        <ul class="list-unstyled list-pricing mt-3 mb-4">
                            <li>100% Email Verified</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>200 Data's instant access</li>
                            <li>50 data's once in a week update</li>
                            <li>Start Promoting Instantly</li>
                            <li>30days Validity</li>
                        </ul>
                        <div class="text-center mt-4">
                            <a href="signup.html" class="btn btn-lg btn-outline-primary btn-outline-theme">Sign up for free</a>
                        </div>
                    </div>
                </div>
            </div>--}}
            <div class=" offset-4 col-md-4">
                <div class="mt-5 price-card price-card2 p-lg-4 p-md-3 p-4 recomemded-price">
                    <div class="card-header p-0 card-heading">
                        <h3 class="mb-4">Payment {{--<span class="label label-popular">Popular</span>--}}</h3>
                    </div>
                    <div class="card-body p-0">
                        <h1 class="card-title pricing-card-title my-price-title">??? {{$data['amount']}}<small class="text-dull">/-</small></h1>
                        <p>Connect with decision makers before your competitors do.</p>
                        <ul class="list-unstyled list-pricing mt-3 mb-4">
                            <li>100% Email Verified</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>200 Data's instant access</li>
                            <li>50 data's once in a week update</li>
                            <li>30days Validity</li> <br>
                        <p style="line-height: 150%; margin-top: 0; margin-bottom: 0" dir="ltr">
                        <font face="Arial" size="2"><font color="#484848">We suggest to
                        </font><font color="#B30000"><u>Transact using Credit/Debit Cards for at anytime.</u></font><br>
                        <font color="#484848">Some <b>Banks</b> <b>NOT supports
                        Internet Banking after 6:00PM</b></font></font></p>

                        </ul>
                        <div class="text-center mt-4">
                            <form action="{{URL::to('paymentsuccess')}}" method="POST">
                                @csrf
                                <script
                                    src="https://checkout.razorpay.com/v1/checkout.js"
                                    data-key="{{$data['key']}}"
                                    data-amount="{{ $data['amount']}}"
                                    data-currency="INR"
                                    data-name="{{ $data['name']}}"
                                    data-image="{{ $data['image']}}"
                                    data-description="{{ $data['description']}}"
                                    data-prefill.name="{{ $data['prefill']['name']}}"
                                    data-prefill.email="{{ $data['prefill']['email']}}"
                                    data-prefill.contact="{{ $data['prefill']['contact']}}"
                                    data-notes.shopping_order_id="{{$data['notes']['merchant_order_id']}}"   Our Order No
                                    data-order_id="{{$data['order_id']}}"                                       Razorpay order No

                                    @if ($displayCurrency!== 'INR')
                                    data-display_amount="{{$data['display_amount']}}"
                                    data-display_currency="{{$data['display_currency']}}"
                                    @endif
                          {{--          data-email="info@tradetech.co.in"
                                    data-contact="9843153164"
                                    data-method="wallet"
                                    data-wallet="paypal"--}}

                                >
                                </script>
                            {{--<script>
                                razorpay.createPayment({
                                    amount: 5000,
                                    email: 'info@tradetech.co.in',
                                    contact: '9843153164',
                                    order_id: "{{$data['order_id']}}",
                                    method: 'wallet',
                                    wallet: 'paypal'
                                });
                            </script>--}}
                                <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
                                <input type="hidden" name="shopping_order_id" value="{{$data['order_id']}}">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>





@endsection
