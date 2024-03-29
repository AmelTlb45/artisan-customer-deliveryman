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
            background-color: #f8f7f7;
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

        .comment-section {
            margin-top: 20px;
        }

        .comment-box {
            border: 2px solid #c4cdd6;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #d0d8e0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .comment-box strong {
            color: #e74c3c;
            font-size: 20px;
        }

        .comment-box p {
            margin: 15px 0;
            font-size: 16px;
            color: #ecf0f1;
        }

        .reply {
            background-color: #f9f9fa;
            border: 2px solid #f8fafc;
            border-radius: 8px;
            padding: 15px;
            margin: 10px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .reply strong {
            color: #e74c3c;
            font-size: 18px;
        }

        .reply p {
            margin: 10px 0;
            font-size: 16px;
            color: #ecf0f1;
        }

        .replyDiv {
            margin-top: 10px;
            margin-bottom: 20px;
        }

        /* Additional styling as needed */
        .comment-section {
            margin-top: 20px;
            background-color: #f8f9fa;
            /* Light gray background color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .comment-section h2 {
            margin: 10px 0;
            color: #0f0f0f;
            font-weight: bold;
            font-size: 24px;
        }

        .comment-section form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .comment-section textarea {
            width: 100%;
            max-width: 500px;
            height: 80px;
            padding: 15px;
            box-sizing: border-box;
            margin-bottom: 10px;
            border: none;
            border-radius: 10px;
            background-color: #d4edda;
            resize: none;
            font-size: 16px;
            line-height: 1.5;
            outline: none;
        }

        .comment-section .btn-primary {
            padding: 10px 20px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border-radius: 20px;
            color: #fff;
            background-color: #007bff;
            /* Blue color */
            border: 1px solid #0056b3;
            /* Darker blue border */
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .comment-section .btn-primary:hover {
            background-color: #0056b3;
            /* Darker blue on hover */
            border-color: #004080;
            /* Darker blue border on hover */
            transform: scale(1.05);
        }
    </style>



    <div class="row">
        <div class="col-lg-12">
            <div class="main_title position-relative">
                <h1>Product Details</h1>
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
                    <div class="col-md-4">
                        <!-- Product Image -->
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name_prod }}" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="row">Price</th>
                                    <td>{{ $product->price }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Quantity_Min</th>
                                    <td>{{ $product->quantity_min }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Category</th>
                                    <td>{{ $product->category->name_category }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Type</th>
                                    <td>{{ $product->type->name_type }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Description</th>
                                    <td>{{ $product->description }}</td>
                                </tr>
                                <tr>
                                    <form action="{{ url('/add_cart', $product->id) }}"method="POST">
                                        @csrf
                                        <div class="row">
                                            <th scope="row">
                                                {{ 'Actions:' }}
                                            </th>
                                            <td colspan="1">
                                                <input type="number" class="quantity-input" name="quantity"
                                                    value="1" min="1">
                                                <button class="btn-add-to-cart">Add to Cart</button>
                                            </td>

                                        </div>
                                    </form>
                                </tr>
                                {{-- Add more details as needed --}}
                            </tbody>
                        </table>

                                        <!-- Comment Section -->
                                        <div class="comment-section">
                                            <form action="{{ url('add_comment') }}" method="POST">
                                                @csrf
                                                <textarea id="commentTextarea" name="comment" placeholder="Comment something here ..."></textarea>
                                                <br>
                                                <input type="submit" class="btn btn-primary" value="Comment">
                                            </form>

                                            <h2 class="comment">All Comments</h2>
                                            <div>
                                                <!-- Loop through comments and replies -->
                                                @foreach ($comment as $comment)
                                                    <div class="comment-box">
                                                        <strong>{{ $comment->name }}</strong>
                                                        <p>{{ $comment->comment }}</p>
                                                        <a href="javascript:void(0);" onclick="reply(this)"
                                                            data-Commentid="{{ $comment->id }}">Reply</a>

                                                        <!-- Loop through replies -->
                                                        @foreach ($reply as $rep)
                                                            @if ($rep->comment_id == $comment->id)
                                                                <div class="reply">
                                                                    <strong>{{ $rep->name }}</strong>
                                                                    <p>{{ $rep->reply }}</p>
                                                                    <a href="javascript:void(0);"
                                                                        onclick="reply(this)"
                                                                        data-Commentid="{{ $comment->id }}">Reply</a>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div style="display: none;" class="replyDiv">
                                                <form action="{{ url('add_reply') }}" method="Post">
                                                    @csrf
                                                    <input type="text" id="commentId" name="commentId"
                                                        hidden="">
                                                    <textarea id="commentTextarea" name="reply" placeholder="Reply to the comment ..."></textarea>
                                                    <br>
                                                    <button type="submit" class="btn btn-warning">Reply</button>
                                                    <a href="javascript::void(0);" class="btn btn-danger"
                                                        onclick="reply_close(this)">Close</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
</body>

</html>
