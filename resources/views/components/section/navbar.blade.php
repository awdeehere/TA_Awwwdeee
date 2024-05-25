<nav class="navbar">
    <div class="logo"> <a href="index.html"> <img src="{{ url('/') }}/frontview/images/logo.png" alt="Image"> </a>
    </div>
    <!-- end logo -->
    <div class="custom-menu">
        <ul>
            <li><a href="#">Eng</a></li>
            <li><a href="#">Rus</a></li>
        </ul>
    </div>
    <!-- end custom-menu -->
    <div class="site-menu">
        <ul>
            <li><a href="{{ url('home') }}">Beranda</a></li>
            <li><a href="{{ url('galeri') }}">Galeri</a></li>
            <li><a href="collections.html">Collections</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </div>
    <!-- end site-menu -->
    <div class="search-button"> <i class="far fa-search"></i> </div>
    <!-- end search-button -->
    <div class="hamburger-menu">
        <svg class="hamburger" width="30" height="30" viewBox="0 0 30 30">
            <path class="line line-top" d="M0,9h30" />
            <path class="line line-center" d="M0,15h30" />
            <path class="line line-bottom" d="M0,21h30" />
        </svg>
    </div>
    <!-- end hamburger-menu -->
    <div class="navbar-button"> <a href="membership.html">GET A TICKET</a> </div>
    <!-- end navbar-button -->
</nav>