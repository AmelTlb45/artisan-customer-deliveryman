<div class="side_menu">
    <a class="logo" href="{{ url('/') }}">
        <img src="home/img/logo.png" alt="">
    </a>
    <ul class="list menu_right">
        <li>
            @if (Route::has('login'))
                @auth
                  <li>
                    <x-app-layout>
                    </x-app-layout>
                </li>
                @else
                    <li>
                        <a class="btn btn-success" id="logincss" href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a class="btn btn-primary" id="registercss" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                @endauth
            @endif
        </li>
        <li>
            <a href="{{ url('/') }}">Home</a>
        </li>
        <li>
            <a href="{{ url('products') }}">Diches</a>
        </li>
        <li>
            <a href="menu.html">Menu</a>
        </li>
        <li>
            <a href="book-table.html">Book a table</a>
        </li>
        <li>
            <a href="#">Pages</a>
            <ul class="list">
                <li>
                    <a href="gallery.html">Gallery</a>
                </li>
                <li>
                    <a href="elements.html">Elements</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Blog</a>
            <ul class="list">
                <li>
                    <a href="blog.html">Blog</a>
                </li>
                <li>
                    <a href="single-blog.html">Blog Details</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="contact.html">Contact</a>
        </li>
        <li>
            <a href="{{ url('/show_cart') }}">Cart</a>
        </li>
        <li>
            <a href="{{ url('show_order') }}">Order</a>
        </li>

    </ul>

</div>
