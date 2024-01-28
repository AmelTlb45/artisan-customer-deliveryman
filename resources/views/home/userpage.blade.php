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
    <!-- Add this to the head of your HTML file -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="home/css/style.css">
	<link rel="stylesheet" href="home/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>


        .comment {
            margin: 10px 0;
            color: #0f0f0f;
            text-align: center; /* Center the text */
            font-weight: bold; /* Make the text bold */
            font-size: 24px; /* Set the desired font size */
        }



        form {
            margin: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        textarea {
            width: 100%;
            max-width: 500px; /* Increased width */
            height: 150px; /* Increased height */
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 10px;
            border: none;
            border-radius: 10px;
            background-color: #d4edda; /* Light green background */
            resize: none;
            font-size: 16px;
            line-height: 1.5;
            outline: none;
        }

        .btn-primarye {
            padding: 10px 20px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border-radius: 20px; /* Increased border-radius for a more rounded button */
            color: #fff;
            background-color: #28a745; /* Green color */
            border: 1px solid #218838; /* Darker green border */
            transition: background-color 0.3s ease, transform 0.2s ease; /* Added transform property for scale effect */
        }

        .btn-primary:hover {
            background-color: #218838; /* Darker green on hover */
            border-color: #1e7e34; /* Darker green border on hover */
            transform: scale(1.05); /* Scale the button on hover */
        }



        .comment-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 50vh;
            width: 100%; /* Take up the entire width of the screen */
            max-width: 200px; /* Set a maximum width if needed */
            margin: 0 auto;

        }

        .comment-section h2 {
            margin: 10px 0;
            color: #0f0f0f;
            font-weight: bold;
            font-size: 24px;
        }

        .comment-section form {
            margin: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .comment-section textarea {
            width: 100%;
            max-width: 5000px;
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

        .comment-section .btn-primarye {
            padding: 10px 20px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border-radius: 20px;
            color: #fff;
            background-color: #28a745;
            border: 1px solid #218838;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .comment-section .btn-primarye:hover {
            background-color: #218838;
            border-color: #1e7e34;
            transform: scale(1.05);
        }

        .comment-section strong {
            font-weight: bold;
            color: #000; /* Black color */
        }

        .comment-section div {
            margin-bottom: 15px;
        }

        .comment-section div strong {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .comment-section div p {
            margin: 5px 0;
        }



        .reply {
            background-color: #f8f9fa; /* Light gray background color */
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
        }

        .reply strong {
            font-weight: bold;
            color: #212529; /* Dark color for the text */
        }

        .reply p {
            margin: 5px 0;
            color: #495057; /* Slightly lighter color for the text */
        }

        .reply a {
            color: #007bff; /* Blue color for the "Reply" link */
            text-decoration: none;
            margin-left: 10px; /* Add some space between the reply text and link */
            cursor: pointer;
        }

        .reply a:hover {
            text-decoration: underline; /* Underline the link on hover */
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

	<!--================ Start banner section =================-->
      @include('home.banner')
	<!--================ End banner section =================-->

	<!--================ Top Dish Area =================-->
     @include('home.dish')
	<!--================ End Top Dish Area =================-->

	<!--================ Menu Area =================-->
	@include('home.menu')
	<!--================End Menu Area =================-->

    <!--================ Comment and Replay System Starts Here =================-->
    <div class="comment-section">
        <h2 class="comment">Comments</h2>
        <form action="{{url('add_comment')}}" method="POST">
            @csrf
            <textarea id="commentTextarea" name="comment" placeholder="Comment something here ..."></textarea>
            <br>
           <input type="submit" class="btn btn-primarye" value="Comment">
        </form>
    </div>

    <div class="comment-section">
        <h2 class="comment">All Comments</h2>
        <div>
            @foreach ( $comment as $comment )
            <div>
                <strong>{{ $comment->name }}</strong>
                <p>{{ $comment->comment }}</p>
                <a href="javascript:void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>

            @foreach ( $reply as $rep )
            @if($rep->comment_id == $comment->id)
            <div class="reply">
                <strong>{{ $rep->name }}</strong>
                <p>{{ $rep->reply }}</p>
                <a href="javascript:void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>

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
            <textarea id="commentTextarea"  name="reply" placeholder="Comment something here ..."></textarea>
            <br>
            <button type="submit" class="btn btn-warrning">Reply</button>

            <a href="javascript::void(0);" class="btn btn-danger" onclick="reply_close(this)">Close</a>
            </form>

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
