
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
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
    background-color: rgb(238, 241, 59); /* Match the color of the title */
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


    h3.order-number {
        font-size: 24px;
        color: black; /* Adjust color as needed */
        margin-bottom: 10px;
    }

    div.total-price-container {
        text-align: right;
        padding: 20px;
    }

    h2.total-price {
        font-size: 24px;
        font-weight: bold;
        color: #080808; /* Default color */
        transition: color 0.3s ease; /* Smooth transition on hover */
    }

    h2.total-price:hover {
        color: #0056b3; /* Hover color */
    }
    button.btn-cancel {
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        background-color: #4feb5c; /* Default background color (orange) */
        border: none;
        border-radius: 25px; /* Rounded corners */
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease; /* Smooth transitions on hover */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add subtle shadow */
    }

    button.btn-cancel:hover {
        background-color: rgb(62, 146, 23); /* Hover background color (darker orange) */
        transform: translateY(-3px); /* Move the button up slightly on hover */
    }
    </style>
    <div class="row">
        <div class="col-lg-12">
            <div class="main_title position-relative">
                <h1> Show Order</h1>
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
    @if (session()->has('message'))
    <div class="alert alert-success">
         <button  type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
      {{ session()->get('message') }}
    </div>
      @endif

    @foreach ($order as $index => $order)
    <div class="card">
        <div class="card-header">
            <h3 class="order-number">Order Number {{ $index + 1 }}</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset($order->image) }}" alt="{{ $order->product_title }}" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td><strong>Name:</strong></td>
                                <td>{{ $order->name }}</td>
                            </tr>
                            <tr>
                                <td><strong>Email:</strong></td>
                                <td>{{ $order->email }}</td>
                            </tr>
                            <tr>
                                <td><strong>Name Product:</strong></td>
                                <td>{{ $order->product_title }}</td>
                            </tr>
                            <tr>
                                <td><strong>Quantity:</strong></td>
                                <td>{{ $order->quantity }}</td>
                            </tr>
                            <tr>
                                <td><strong>Price:</strong></td>
                                <td>{{ $order->price }}</td>
                            </tr>
                            <tr>
                                <td><strong>Payment status:</strong></td>
                                <td>{{ $order->payment_status }}</td>
                            </tr>
                            <tr>
                                <td><strong>Delivery status:</strong></td>
                                <td>{{ $order->delivery_status }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Cancel ? </th>
                                <td>
                                @if($order->delivery_status =='processing')
                                <a href="{{ url('/cancel_order',$order->id) }}"><button class="btn-cancel" onclick="return confirm('Are you sure to delete this?')">Cancel Order</button></a>
                                </td>
                                @else
                                 <strong style="color:red"> Not Allowed </strong>
                                @endif
                            </tr>
                            {{-- Add more details as needed --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endforeach


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

</html>
