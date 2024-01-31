<style>
    .footer-area{


        /* background: linear-gradient(to right,#ffecd2 0%,#fcb69f 100%); */
background:url('template/src/images/2.png') no-repeat center center fixed;
}
</style>
<footer class="footer-area p_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                            <a class="nav-link" href="{{ url('/') }}"><h3>Home</h3></a>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <a href="{{ url('show_order') }}"><h3>Order</h3></a>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <a href="{{ url('products') }}"><h3>Diches</h3></a>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <a class="nav-link" href="contact.html"><h3>Cart</h3></a>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">

                    <a class="nav-link" href="{{ url('/add_comment') }}"><h3>Home</h3></a>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                 
                </div>
            </div>
         </div>


            <div class="col-lg-4 col-md-6 col-sm-6">

                            <div class="producct-img mx-auto">
                               {{-- <img src="template/src/images/logo.png" alt="" /> --}}
                            </div>

                    </div>




    </div>
</footer>
