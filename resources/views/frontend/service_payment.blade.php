@extends('frontend.main_master')
@section('main')

@section('title')
Payment Page | RiyadMS Website
@endsection


    <!-- contact-area -->
    <section class="homeContact homeContact__style__two" style="margin-top:10%;">
        <div class="container">
            <div class="homeContact__wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section__title">
                            <span class="sub-title">07 - Say hello</span>
                            <h2 class="title">Any questions? Feel free <br> to contact</h2>
                        </div>
                        <div class="homeContact__content">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="homeContact__form">
                            <form action="#">
                                <div class="row">

                                       <input name="first_name" type="text" placeholder="First Name*">
                                       <input name="last_name" type="text" placeholder="Last Name*">
                                       <input name="company_name" type="text" placeholder="Company Name*">
                                       <input name="country" type="text" placeholder="Country*">

                                       <input name="street_address" type="text" placeholder="Street Address*">
                                       <input name="zip_code" type="text" placeholder="Zip Code*">
                                       <input name="user_email" type="email" placeholder="Email Address*">
                                       <input name="phone_number" type="number" placeholder="Phone Number*">

                                        <textarea name="message" placeholder="Enter Massage*"></textarea>

                                        <div class="row">

<div class="col-md-4">
    <input type="radio" name="payment_method" value="stripe"> Stripe
</div><!-- End col-md-4 -->

<div class="col-md-4">
    <input type="radio" name="payment_method" value="paypal"> PayPal
</div><!-- End col-md-4 -->


<div class="col-md-4">
    <input type="radio" name="payment_method" value="cash"> Cash
</div><!-- End col-md-4 -->

</div><!-- End row -->
                                        <a href="" class="btn" style="margin-top:30px;">PayPal</a>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->


@endsection