<!DOCTYPE html>
<html>
<head>
    <title>Pay Amount</title>
    <base href="/public">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="home/img/favicon.png" type="image/png">
	<title>Food Bar</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="home/css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="home/css/font-awesome.min.css">
	<link rel="stylesheet" href="home/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/css/lightgallery.min.css">
	<link rel="stylesheet" href="home/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="home/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="home/vendors/popup/magnific-popup.css">
	<link rel="stylesheet" href="home/vendors/swiper/css/swiper.min.css">
	<link rel="stylesheet" href="home/vendors/scroll/jquery.mCustomScrollbar.css">
	<!-- main css -->
	<link rel="stylesheet" href="home/css/style.css">
	<link rel="stylesheet" href="home/css/responsive.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
    .main_title {
        margin-top: 50px; /* Adjust the margin-top as needed to move it down */
        text-align: center;
    }
    
    h1 {
        font-size: 36px; /* Adjust the font size as needed */
        color: #333; /* Adjust the color as needed */
    }
    
    hr {
        border: 2px solid #333; /* Match the color of the title */
        margin: 20px auto; /* Add margin to the hr for spacing */
        width: 50%; /* Adjust the width as needed */
    }
    
    /* Styles for decorative elements */
    .round-planet {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px; /* Adjust the margin-top as needed for spacing */
    }
    
    .planet {
        background-color: #9492f8; /* Match the color of the title */
        border-radius: 50%;
        height: 60px;
        width: 60px;
    }
    
    .planet2 {
        background-color: #fff; /* Set the background color of the inner planet */
        border-radius: 50%;
        height: 40px;
        width: 40px;
    }
    
    .shape {
        background-color:#333; /* Match the color of the title */
        border-radius: 50%;
        height: 10px;
        width: 10px;
    }
    
    .shape1 {
        margin-right: 10px; /* Adjust the margin as needed for spacing */
    } .quantity-container {
        display: flex;
        align-items: center;
    }
    body {
        background-color: #f8f9fa; /* Light gray background */
    }

    .container {
        margin-top: 50px;
    }

    h1 {
        text-align: center;
        font-size: 28px;
        color: #007bff; /* Blue color */
    }

    .credit-card-box {
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
    }

    .panel-heading {
        background-color: #007bff;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        color: #fff;
    }

    .panel-title {
        font-size: 20px;
    }

    .panel-body {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        height: 40px;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Darker blue on hover */
    }

    .alert-danger {
        background-color: #f8d7da; /* Light red for error messages */
        color: #721c24; /* Dark red text */
        border: 1px solid #f5c6cb; /* Border color */
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
    }

    .alert-danger a {
        color: #721c24; /* Dark red for error message links */
    }
    h2{
        text-align: center;
    
    }
    h2::after {
        content: ' .D.A ';
        color: #555; /* Dark gray color for the " .D.A -" part */
    }

    /* Shimmering effect */
    @keyframes shimmer {
        0% {
            text-shadow: -2px -2px 5px rgba(255, 255, 255, 0.8),
                            2px 2px 5px rgba(0, 0, 0, 0.4);
        }
        50% {
            text-shadow: -2px -2px 15px rgba(255, 255, 255, 0.8),
                            2px 2px 15px rgba(0, 0, 0, 0.4);
        }
        100% {
            text-shadow: -2px -2px 5px rgba(255, 255, 255, 0.8),
                            2px 2px 5px rgba(0, 0, 0, 0.4);
        }
    }

    h2:hover {
        animation: shimmer 1s infinite;
    }
    button.btn-primary {
        padding: 15px 25px;
        font-size: 18px;
        font-weight: bold;
        color: #fff;
        background-color: #4CAF50; /* Calm green color */
        border: none;
        border-radius: 25px; /* Adjust border-radius for rounded corners */
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease; /* Smooth transitions on hover */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add subtle shadow */
    }
    
    button.btn-primary:hover {
        background-color: #45a049; /* Hover background color (darker green) */
        transform: scale(1.05); /* Increase size on hover */
    }
    
</style>
</head>
<body>
    <!--================Offcanvus Menu Area =================-->
	@include('home.Offcanvus')
	<!--================End Offcanvus Menu Area =================-->

	<!--================Header Menu Area =================-->
	@include('home.header')
	<!--================Header Menu Area =================-->

	<!--================Canvus Menu Area =================-->
	@include('home.canvus')
	<!--================End Canvus Menu Area =================-->

    <div class="row">
        <div class="col-lg-12">
            <div class="main_title position-relative">
                <h1> Pay Using Your Card</h1>
                <hr>
                <div class="round-planet planet">
                    <div class="round-planet planet2">
                        <div class="shape shape1"></div>
                        <div class="shape shape2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container">
    
    <h2>Total Amount : {{ $totalprice }} </h2>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                        <h3 class="panel-title" >Payment Details</h3>
                </div>
                <div class="panel-body">
    
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
    
                    <form 
                            role="form" 
                            action="{{ route('stripe.post', ['totalprice' => $totalprice]) }}" 
                            method="post" 
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="payment-form">
                        @csrf
    
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg " type="submit">Pay Now </button>
                            </div>
                        </div>
                            
                    </form>
                </div>
            </div>        
        </div>
    </div>
        
</div>
    
	<!--================ start footer Area  =================-->
    @include('home.footer')
<!--================ End footer Area  =================-->





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="home/js/jquery-3.2.1.min.js"></script>
<script src="home/js/popper.js"></script>
<script src="home/js/bootstrap.min.js"></script>
<script src="home/js/stellar.js"></script>
<script src="home/js/jquery.lightbox.js"></script>
<script src="home/vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="home/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="home/vendors/isotope/isotope-min.js"></script>
<script src="home/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="home/js/jquery.ajaxchimp.min.js"></script>
<script src="home/vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="home/vendors/counter-up/jquery.counterup.js"></script>
<script src="home/js/mail-script.js"></script>
<script src="home/vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="home/vendors/swiper/js/swiper.min.js"></script>
<script src="home/vendors/scroll/jquery.mCustomScrollbar.js"></script>
<script src="home/js/theme.js"></script>
</body>
    
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
<script type="text/javascript">
  
$(function() {
  
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
    
    var $form = $(".require-validation");
     
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
    
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
     
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
                 
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
</script>
</html>