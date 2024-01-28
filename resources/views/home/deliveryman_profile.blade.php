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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>


        .comment-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 50vh;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        .comment-section h2.comment {
            margin: 20px 0;
            color: #04243a;
            font-weight: bold;
            font-size: 32px;
            text-align: center;
            transition: color 0.3s ease;
        }

        .comment-section form {
            margin: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .comment-section textarea {
            width: 100%;
            max-width: 100%;
            height: 120px;
            padding: 15px;
            box-sizing: border-box;
            margin-bottom: 20px;
            border: 2px solid #bdc3c7;
            border-radius: 10px;
            background-color: #ecf0f1;
            transition: border-color 0.3s ease, background-color 0.3s ease;
            font-size: 20px;
            line-height: 1.5;
            outline: none;
        }

        .comment-section textarea:focus {
            border-color: #3498db;
            background-color: #fff;
        }

        .comment-section .btn-primarye {
            padding: 50px 24px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border-radius: 20px;
            color: #fff;
            background-color: #3498db;
            border: 2px solid #2980b9;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .comment-section .btn-primarye:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }

        .comment-box {
            border: 2px solid #bdc3c7;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #ecf0f1;
            animation: fadeInUp 1s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .comment-box:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .comment-box strong {
            color: #e74c3c;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        .comment-box p {
            margin: 15px 0;
            font-size: 16px;
            color: #34495e;
            transition: color 0.3s ease;
        }

        .comment-box:hover strong,
        .comment-box:hover p {
            color: #e67e22;
        }

        .reply {
            background-color: #fff;
            border: 2px solid #bdc3c7;
            border-radius: 8px;
            padding: 15px;
            margin: 10px 0;
            animation: fadeInUp 1s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .reply:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .reply strong {
            color: #e74c3c;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .reply p {
            margin: 10px 0;
            font-size: 16px;
            color: #34495e;
            transition: color 0.3s ease;
        }

        .reply:hover strong,
        .reply:hover p {
            color: #e67e22;
        }

        .comment-section {
            background: linear-gradient(45deg, #f8f9fa 25%, transparent 25%) -50px 0,
                        linear-gradient(-45deg, #f8f9fa 25%, transparent 25%) -50px 0,
                        linear-gradient(45deg, transparent 75%, #f8f9fa 75%) -50px 0,
                        linear-gradient(-45deg, transparent 75%, #f8f9fa 75%) -50px 0;
            background-size: 100px 100px;
            background-color: #ecf0f1;
            padding: 30px;
            border-radius: 15px;
            transition: background-color 0.3s ease;
        }

        .comment-section:hover {
            background-color: #fff;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

    </style>
</head>

<body>


	<!--================ End Top Dish Area =================-->

	<!--================ Menu Area =================-->

	<!--================End Menu Area =================-->

    <!--================ Comment and Replay System Starts Here =================-->
    <div class="container">
        <h1>Deliveryman Profile</h1>

        <!-- Artisan Information Section -->
        <div class="row artisan-info">
            <div class="col-md-6">
                <img src="artisan/vendors/images/m1.png" alt="{{ $deliveryman->name }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>{{ $deliveryman->name }}</h2>
                <p>Email: {{ $deliveryman->email }}</p>
                <p>Phone: {{ $deliveryman->phone }}</p>

                <p>Heur_Overture: {{ $deliveryman->Heur_Overture }}</p>
                <p>Heur_Fermetur: {{ $deliveryman->Heur_Fermetur }}</p>
                <p>Description: {{ $deliveryman->Description }}</p>
                <p>Disponible Now ? {{ $deliveryman->Dispo }}</p>
                <!-- Add any other artisan details you want to display -->
            </div>


        </div>



        <!-- Comment Section -->
        <h3></h3>
        <div class="comment-section">
            <h2 class="comment">Your Opinion about {{ $deliveryman->name }}</h2>
            <form action="{{ url('add_comment') }}" method="POST">
                @csrf
                <textarea id="commentTextarea" name="comment" placeholder="Comment something here ..."></textarea>
                <br>
                <input type="submit" class="btn btn-primary" value="Comment">
            </form>


            <h2 class="comment">All Comments</h2>
            <div>
                @foreach ($comment as $comment)
                    <div>
                        <strong>{{ $comment->name }}</strong>
                        <p>{{ $comment->comment }}</p>
                        <a href="javascript:void(0);" onclick="reply(this)" data-Commentid="{{ $comment->id }}">Reply</a>

                        @foreach ($reply as $rep)
                            @if($rep->comment_id == $comment->id)
                                <div class="reply">
                                    <strong>{{ $rep->name }}</strong>
                                    <p>{{ $rep->reply }}</p>
                                    <a href="javascript:void(0);" onclick="reply(this)" data-Commentid="{{ $comment->id }}">Reply</a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endforeach
            </div>
            <div style="display: none;" class="replyDiv">
                <form action="{{ url('add_reply') }}" method="Post">
                    @csrf
                    <input type="text" id="commentId" name="commentId" hidden="">
                    <textarea id="commentTextarea" name="reply" placeholder="Reply to the comment ..."></textarea>
                    <br>
                    <button type="submit" class="btn btn-warning">Reply</button>
                    <a href="javascript::void(0);" class="btn btn-danger" onclick="reply_close(this)">Close</a>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
     function reply(caller)
     {
        document.getElementById('commentId').value=$(caller).attr('data-Commentid');
       $('.replyDiv').insertAfter($(caller));
       $('.replyDiv').show();
     }

     function reply_close(caller)
     {
       $('.replyDiv').hide();
     }
    </script>


    <!--================ Comment and Replay System Ends Here =================-->

	<!--================ Gallery Area =================-->
        @include('home.gallery')
	<!--================ End Gallery Area =================-->

	<!--================Member Area =================-->
	@include('home.member')
	<!--================End Member Area =================-->

	<!--================Book Table Area =================-->
	@include('home.bookTable')
	<!--================End Book Table Area =================-->

	<!--================ start footer Area  =================-->
             @include('home.footer')
	<!--================ End footer Area  =================-->




    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>
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
