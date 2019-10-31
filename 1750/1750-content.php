<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/'.$pattern_document_root.'(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host.$matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="container">
<header id="header">
    
        <div id="logo" class="pull-left">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
            <a href="#intro" class="scrollto"><img src="img/listing_logo.svg" align ="right"></a>
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#intro">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#speakers">Speakers</a></li>
                <li><a href="#schedule">Schedule</a></li>
                <li><a href="#venue">Venue</a></li>
                <li><a href="#hotels">Hotels</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#supporters">Sponsors</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->
<section id="intro">
    <div class="intro-container wow fadeIn">
        <div class="inner">
            <div class="row">
                <div class="col-md-6">
                    <object id="stm-vivus-arrow" type="image/svg+xml" data="./img/arrow7white.svg"></object>
                </div>
                <div class="col-md-6">
                    <h1>15 000+</h1>
                    <h3>Vehicle Available</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<main id="main">
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>About The Event</h2>x`
                    <p>Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius
                        aut
                        accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt
                        inventore in
                        est ut optio sequi unde.</p>
                </div>
                <div class="col-lg-3">
                    <h3>Where</h3>
                    <p>Downtown Conference Center, New York</p>
                </div>
                <div class="col-lg-3">
                    <h3>When</h3>
                    <p>Monday to Wednesday<br>10-12 December</p>
                </div>
            </div>
        </div>
    </section>
</main>
</div>