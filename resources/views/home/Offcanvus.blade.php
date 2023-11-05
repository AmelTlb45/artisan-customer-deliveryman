<div class="side_menu">
    <a class="logo" href="#">
        <img src="home/img/logo.png" alt="">
    </a>
    <ul class="list menu_right">
        <li>
            <a href="index.html">Home</a>
        </li>
        <li>
            <a href="about-us.html">About</a>
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

    </ul>
    <ul class="list social">
        <li>
            <a href="#">
                <i class="fa fa-facebook"></i>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-twitter"></i>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-dribbble"></i>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-behance"></i>
            </a>
        </li>
    </ul>
</div>
