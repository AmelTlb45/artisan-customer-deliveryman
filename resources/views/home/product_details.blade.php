<!doctype html>
<html lang="en">

<head>
    
    <base href="/public">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha384-GLhlTQ8iN17w4Lq8rNjhPsNkJvTfNpLuczr1" crossorigin="anonymous">
    <link rel="stylesheet" href="/responsive.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family-Roboto:400, 500, 900&display-swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family-Raleway:wght@100;200;400; 500; 800&display-swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family-Lato:wght 400;700;908&display-swap">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Font Awesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha384-GLhlTQ8iN17w4Lq8rNjhPsNkJvTfNpLuczr1" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="home/css/styleRating.css">-->
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
        /* Style for the product card */
        /* Additional style for the row layout */
        .row {
            display: flex;
            align-items: center;
        }

        /* Adjust spacing as needed */
        .col-md-4 {
            padding-right: 20px;
        }

        .col-md-8 {
            padding-left: 20px;
        }

        /* Optional: Add responsive styles for smaller screens */
        @media (max-width: 768px) {
            .row {
                flex-direction: column;
            }

            .col-md-4,
            .col-md-8 {
                padding: 0;
                /* Remove padding for smaller screens */
            }
        }

        /* Add these styles to your existing stylesheet or create a new one */

        /* Style for the Buy Now button */

        /* css of review*/

        /* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */

        button.btn-add-to-cart {
            padding: 15px 25px;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            background-color: #f8d630;
            /* Default background color (yellow) */
            border: none;
            border-radius: 25px;
            /* Rounded corners */
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            /* Smooth transitions on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Add subtle shadow */
        }

        button.btn-add-to-cart:hover {
            background-color: #ffd033;
            /* Hover background color (darker yellow) */
            transform: scale(1.05);
            /* Increase size on hover */
        }





        .main_title {
            margin-top: 50px;
            /* Adjust the margin-top as needed to move it down */
            text-align: center;
        }

        h1 {
            font-size: 36px;
            /* Adjust the font size as needed */
            color: #333;
            /* Adjust the color as needed */
        }

        hr {
            border: 2px solid #333;
            /* Match the color of the title */
            margin: 20px auto;
            /* Add margin to the hr for spacing */
            width: 50%;
            /* Adjust the width as needed */
        }

        /* Styles for decorative elements */
        .round-planet {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            /* Adjust the margin-top as needed for spacing */
        }

        .planet {
            background-color: #ec6c6c;
            /* Match the color of the title */
            border-radius: 50%;
            height: 60px;
            width: 60px;
        }

        .planet2 {
            background-color: #fff;
            /* Set the background color of the inner planet */
            border-radius: 50%;
            height: 40px;
            width: 40px;
        }

        .shape {
            background-color: #333;
            /* Match the color of the title */
            border-radius: 50%;
            height: 10px;
            width: 10px;
        }

        .shape1 {
            margin-right: 10px;
            /* Adjust the margin as needed for spacing */
        }

        .quantity-container {
            display: flex;
            align-items: center;
        }

        .quantity-input {
            width: 40px;
            padding: 8px;
            text-align: center;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 10px;
        }

        .quantity-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        .quantity-input {
            width: 50px;
            margin: 0 10px;
            padding: 8px;
            text-align: center;
        }

        * {
            margin: 0;
            padding: 0;
        }

        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }

        .rate:not(:checked)>input {
            position: absolute;
            top: -9999px;
        }

        .rate:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rate:not(:checked)>label:before {
            content: '★ ';
        }

        .progress-label-left>i:before {
            content: '★ ';
        }

        .rate>input:checked~label {
            color: #ffc700;
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
            color: #c59b08;
        }


        /********************************************************************************************************stars*************/

        :root {
            --primary-color: #f7bf17;

            --linear: #ef5350;

            --white: #fff;

            --r-color: #d63031;

            --light-b: #686de0;
        }

        * {
            padding: 0;

            margin: 0;

            box-sizing: border-box;
        }

        body {
            background-color: #1c1c1c;

        }

        .rating-review {

            height: 100%;

            width: 85%;

            margin: 80px auto;

            background-color: #fefefe;
        }

        .rating-review table {

            width: 100%;

            margin: 0;

            font-family: "roboto", sans-serif;

            border-collapse: collapse;

            border-spacing: 0;

            color: #8f8f8f;

            margin-bottom: .625rem;

        }

        .rating-review table,

        -rating-review td {

            font-size: .8125rem;

            text-align: center;

        }

        .rating-review td {

            padding: 1rem;

            width: 33.3%;
        }

        .tri {

            border-bottom: 1px solid #e2e2e2;

            padding: 12px;

        }

        .rnb h3 {

            color: var(--primary-color);

            font-size: 2.4rem;

            font-family: "roboto", sans-serif;

        }

        .tri .pdt-rate {

            height: 40px;

            display: flex;

            justify-content: center;

            align-items: center;

            flex-direction: column;
        }

        .rating-stars {

            position: relative;

            vertical-align: baseline;

            color: #b9b9b9;

            line-height: 10px;

            float: left;

        }

        .grey-stars {

            height: 100%;

        }

        .filled-stars {

            position: absolute;

            left: 1px;

            top: 2px;

            height: 100%;

            overflow: hidden;

            color: var(--primary-color);
        }

        .filled-stars::before,

        -grey-stars::before {

            content: "12605 12605 12605 12605 12605";

            font-size: 19px;

            line-height: 18px;

            letter-spacing: 0;

        }

        .tri filled-stars::before,

        .tri .grey-stars::before {

            font-size: 20px;

            line-height: 23px;
            I
        }

        .rnrn {
            width: 100%;
            font-family: "lato";

            font-weight: 700;

            font-size: 1rem;
        }

        .rpb {

            width: 100%;

            display: flex;

            flex-direction: column;

            align-items: center;

        }

        .rnpb {

            display: flex;

            width: 100%;

        }

        .rnpb label:first-child {

            margin-right: 5px;

            margin-top: -2px;

            .rnpb label:last-child {

                margin-left: 3px;

                margin-top: -2px;
            }

            .rnpb label i {

                color: var(--primary-color);

            }

            .ropb {

                height: 10px;

                width: 75%;

                background-color: #f1f1f1;

                position: relative;

                margin-bottom: 10px;

            }

            .ripb {

                height: 100%;

                background-color: var(--primary-color);

                border: 1px solid #a0a0a0;

            }

            .rrb p {

                font-size: 1rem;

                font-weight: 500;

                font-family: "raleway";

                margin-bottom: 10px;

            }

            .rrb button {

                width: 220px;

                height: 40px;

                background-color: var(--light-b);

                color: var(--white);

                border: 0;

                outline: none;

                font-size: 1.2rem;

                font-family: "roboto", sans-serif;

                box-shadow: 0px 2px 2px var(--light-b);

                cursor: pointer;

            }

            .rrb button:hover {

                opacity: .9;

            }

            .review-bg {

                position: fixed;

                background-color: rgba(0, 0, 0, .8);

                width: 100%;

                height: 100%;

                top: 0;

                left: 0;

                z-index: 100;

            }

            .review-modal {
                display: flex;

                justify-content: center;

                align-items: center;

                z-index: 101;

                position: fixed;

                top: 0;

                left: 0;
                width: 100%;
                height: 100%;
            }

            .rmp {
                width: 400px;
                height: auto;
                background-color: var(--white);
                border-radius: 10px;
                animation: scaleUp .7s linear;
                transition: all .7s ease-in-out;
                z-index: 201;
            }

            @keyframes scaleup {
                0% {
                    transform: scale(0.2);
                }

                25% {

                    transform: scale(e.8);
                }

                sex {

                    transform: scale(1.2);
                }

                75% {
                    transform: scale(0.8);
                }

                100% {
                    transform: scale(1);
                }

            }

            .rpc {

                text-align: right;

                padding: 6px 15px;

                font-size: 1.Sreng color: var(--11near);
            }

            .rpc span {

                cursor: pointer;

            }

            .rps {

                padding: 20px;

            }

            .rps i {

                font-size: 1.6rem;

                cursor: pointer;

            }

            .rptf textarea,

            .rptf input {

                width: 80%;

                outline: none;

                border: 1px solid #ccc;

                border-radius: 5px;

                padding: 7px;

                resize: none;

                min-height: 30px;

                margin-bottom: 10px;

                font-family: "roboto", sans-serif;

                font-size: 9rem: font-weight: 100;

                color: #777;
            }

            .rptf input {

                min-height: 10px !important;

            }

            .rate-error {

                font-size: 12px;

                color: var(--r-color);

                font-family: "roboto", sans-serif;

                margin-bottom: 5px;

                font-weight: 500;

            }

            .rpsb button {

                color: var(--white);

                background-color: var(--light-b);
                border: 0;
                outline: none;
                width: 80%;
                height: 40%;
                margin-bottom: 20px;
                border-radius: "roboto", sans-serfi;
                cursor: pointer;
            }

            .custom-width {
                width: 100%;
                /* ou toute autre valeur que vous préférez */
            }


            table {
    border-collapse: collapse;
  }

   .tr {
    border-collapse: none
    /* border: none;
    padding: 10px; Ajoutez un espace entre le contenu de la cellule et les bords invisibles si nécessaire */
  }
    </style>



    <div class="row">
        <div class="col-lg-12">
            <div class="main_title position-relative">
                <h1> Product Details</h1>
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

    @if ($product)
        <div class="card">
            <div class="card-header">
                <h3>{{ $product->name_prod }}</h3>
            </div>
            <div class="card-body">




                <div class="row">

                    <div class="col-md-10  mx-auto">
                        <table>
                            <tr>
                                <td style="margin-right: 3px;">
                                    <div class="col-md-">
                                        <img src="{{ asset($product->image) }}" alt="{{ $product->name_prod }}"
                                            class="img-fluid">
                                    </div>
                                </td><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td style="padding-right: 10px;">
                                    <table class="table table-bordered">
                                        <tbody  style="border-collapse: collapse">

                                            <tr  style="border-collapse: none">
                                                {{-- <th scope="row">Price</th> --}}
                                                <h1>{{ $product->price }} DA</h1><br><br><br><br><br><br>
                                            </tr>
                                            <tr style="border-collapse: none">
                                                <h2 scope="row">Quantity_Min : {{ $product->quantity_min }}</h2><br>

                                            </tr style="border-collapse: none">
                                            <tr>
                                                <h2 scope="row">Category : {{ $product->category->name_category }}</h2><br>

                                            </tr>
                                            <tr style="border-collapse: none">
                                                <h2 scope="row" >Type : &nbsp;&nbsp; {{ $product->type->name_type }}</h2><br>

                                            </tr>
                                            <tr style="border-collapse: none">
                                                <h2 scope="row">Description :&nbsp;&nbsp; {{ $product->description }}</h2><br>

                                            </tr>

                                            <tr style="border-collapse: none">

                                                <!-- add to cart-->
                                                <form action="{{ url('/add_cart', $product->id) }}"method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <h2 scope="row">
                                                            {{ 'Actions:' }}
                                                        </h2>


                                                            <input type="number" class="quantity-input" name="quantity"
                                                                value="1" min="1">
                                                            <button class="btn-add-to-cart">Add to Cart</button>


                                                    </div>
                                                </form>
                                                <!--end to add-->
                                            </tr>

                                            {{-- Add more details as needed --}}
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </table>

                        <div class="tab-pan fad" id=" review">
                            <div class="row">
                                <div class="span4">
                                    <h3> wtite a review </h3>
                                    <form method="post" action="{{ url('/add_rating') }}" name="ratingForm"
                                        id="ratingForm">
                                        @csrf
                                        <input type="hidden" name="prod_id" value={{ $product->id }}>
                                        <div class="rate">
                                            <input type="radio" id="star5" name="rating" value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="rating" value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="rating" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rating" value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rating" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                        <div class="span4">
                                            <br> <br> <br>
                                            <h5>Your Review </h5>
                                            <textarea name="review" style=" width:300px ; hieght:50px;"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <!--<input class="btn btn-large"  type="submit" name="Submit">-->
                                            <button class="btn btn-large" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="span4">
                                    <h2> user reviews</h2>


                                    @php
                                        $count = $oneStarCount + $twoStarCount + $threeStarCount + $fourStarCount + $fiveStarCount;
                                        $average = ($oneStarCount * 1 + $twoStarCount * 2 + $threeStarCount * 3 + $fourStarCount * 4 + $fiveStarCount * 5) / $count;

                                    @endphp
                                </div>
                                <div class="container">

                                    <div class="card">
                                        <div class="card-header">Sample Product</div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-4 text-center">
                                                    <h1 class="text-warning mt-4 mb-4">
                                                        <b><span id="average_rating">{{ intval($average) }}</span> /
                                                            5</b>
                                                    </h1>

                                                    <h3><span id="total_review">{{ $count }}</span> Review</h3>
                                                </div>
                                                <div class="col-sm-8 col-lg-10 custom-width">

                                                    <div class="progress-label-left"><b>5</b> <i
                                                            class="fas fa-star text-warning"><span
                                                                id="total_five_star_review"
                                                                style="color: #000000">({{ $fiveStarCount }})</span></i>
                                                    </div>
                                                    <div class="progress-label-right">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: {{ ($fiveStarCount / $average) * 100 }}%;"
                                                                aria-valuenow="{{ ($fiveStarCount / $average) * 100 }}"
                                                                aria-valuemin="0" aria-valuemax="100"
                                                                id="five_star_progress"></div>
                                                        </div>
                                                    </div>


                                                    <div class="progress-label-left"><b>4</b> <i
                                                            class="fas fa-star text-warning">
                                                            <span id="total_four_star_review"
                                                                style="color: #000000">({{ $fourStarCount }})</span>
                                                        </i></div>
                                                    <div class="progress-label-right">
                                                    </div>
                                                    <div class="progress">

                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: {{ ($fourStarCount / $average) * 100 }}%;"
                                                            aria-valuenow="{{ ($fourStarCount / $average) * 100 }}"
                                                            aria-valuemin="0" aria-valuemax="100"
                                                            id="four_star_progress"></div>
                                                    </div>


                                                    <div class="progress-label-left"><b>3</b> <i
                                                            class="fas fa-star text-warning"><span
                                                                id="total_three_star_review"
                                                                style="color: #000000">({{ $threeStarCount }})</span>
                                                        </i></div>
                                                    <div class="progress-label-right">
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: {{ ($threeStarCount / $average) * 100 }}%;"
                                                            aria-valuenow="{{ ($threeStarCount / $average) * 100 }}"
                                                            aria-valuemin="0" aria-valuemax="100"
                                                            id="three_star_progress"></div>
                                                    </div>


                                                    <div class="progress-label-left"><b>2</b> <i
                                                            class="fas fa-star text-warning"> <span
                                                                id="total_two_star_review"
                                                                style="color: #000000">({{ $twoStarCount }})</span>
                                                        </i></div>
                                                    <div class="progress-label-right">
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: {{ ($twoStarCount / $average) * 100 }}%;"
                                                            aria-valuenow="{{ ($twoStarCount / $average) * 100 }}"
                                                            aria-valuemin="0" aria-valuemax="100"
                                                            id="two_star_progress"></div>
                                                    </div>

                                                    <p>
                                                    <div class="progress-label-left"><b>1</b> <i
                                                            class="fas fa-star text-warning"> <span
                                                                id="total_one_star_review"
                                                                style="color: #000000">({{ $oneStarCount }})</span>
                                                        </i></div>
                                                    <div class="progress-label-right">
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: {{ ($oneStarCount / $average) * 100 }}%;"
                                                            aria-valuenow="{{ ($oneStarCount / $average) * 100 }}"
                                                            aria-valuemin="0" aria-valuemax="100"
                                                            id="one_star_progress"></div>
                                                    </div>
                                                    </p>
                                                </div>
                                                <div class="col-sm-4 text-center">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5" id="review_content"></div>



                                    <div id="review_modal" class="modal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Submit Review</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4 class="text-center mt-2 mb-4">
                                                        <i class="fas fa-star star-light submit_star mr-1"
                                                            id="submit_star_1" data-rating="1"></i>
                                                        <i class="fas fa-star star-light submit_star mr-1"
                                                            id="submit_star_2" data-rating="2"></i>
                                                        <i class="fas fa-star star-light submit_star mr-1"
                                                            id="submit_star_3" data-rating="3"></i>
                                                        <i class="fas fa-star star-light submit_star mr-1"
                                                            id="submit_star_4" data-rating="4"></i>
                                                        <i class="fas fa-star star-light submit_star mr-1"
                                                            id="submit_star_5" data-rating="5"></i>
                                                    </h4>
                                                    <div class="form-group">
                                                        <input type="text" name="user_name" id="user_name"
                                                            class="form-control" placeholder="Enter Your Name" />
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
                                                    </div>
                                                    <div class="form-group text-center mt-4">
                                                        <button type="button" class="btn btn-primary"
                                                            id="save_review">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>Product not found.</p>
    @endif

    <!--================Book Table Area =================-->
    @include('home.bookTable')
    <!--================End Book Table Area =================-->

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
    <script>
        // Example: Update the average rating dynamically
        function updateAverageRating(newAverageRating) {
            document.getElementById('average_rating').innerText = newAverageRating.toFixed(1);
        }

        // Call this function when you need to update the average rating
        // For example, after submitting a new rating
        // updateAverageRating(newAverageRating);
    </script>
    <script>
        $(document).ready(function() {
    </script>
</body>

</html>
