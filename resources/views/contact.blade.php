@extends('layouts.app')

@section('content')
  <!-- Heading page -->
        <section class="heading-page">
            <img src="assets/images/contact/contact-heading.jpg" alt="">
            <div class="heading-page-content position-center">
                <div class="page-title">
                    <h1>Contact us</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- Map -->
        <section class="map">
            <h4 class="heading-section">Heading section</h4>
            <div class="map-wrapper js-google-map" data-makericon="assets/images/logo-img.png" data-makers='[["Bricktower", "Now that you visited our website,<br> how about checking out our office too?", 40.715681, -74.003427]]'>
                <div class="map__holder js-map-holder" id="map"></div>
            </div>
        </section>

        <!-- Contact us -->
        <div class="contact-us">
            <div class="container">
                <div class="contact-title">
                    <h2>Contact Us</h2>
                </div>
                <div class="contact-us-content">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 contact-form">
                            <form method="POST" action="assets/includes/contact-form.php" class="js-contact-form">
                                <div class="wrap-group">
                                    <label for="name">Your name</label>
                                    <input type="text" name="name" id="name" required>
                                </div>
                                <div class="wrap-group">
                                    <label for="phone">Your phone</label>
                                    <input type="text" id="phone" name="phone" required>
                                </div>
                                <div class="wrap-group">
                                    <label for="email">Your email</label>
                                    <input type="email" name="email" id="email" placeholder="Ex. Julian.smith@email.com" required>
                                </div>
                                <div class="wrap-group">
                                    <label for="mes">Message</label>
                                    <textarea name="mes" id="mes" required></textarea>
                                </div>
                                <div class="wrap-group">
                                    <input type="submit" value="submit" class="btn-global btn-yellow">
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 contact-info">
                            <ul>
                                <li>
                                    <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                    <div class="contact-info-content">
                                        <div class="title title-bold ">Our Location</div>
                                        <div class="desc">
                                            Building Cror, New York, NY <br>
                                            93459
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                                    <div class="contact-info-content">
                                        <div class="title title-bold ">Call Us</div>
                                        <div class="desc">
                                            1-115-221-2564
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                                    <div class="contact-info-content">
                                        <div class="title title-bold ">Follow Us on Socials</div>
                                        <div class="desc">
                                            <div class="socials">
                                                <ul>
                                                    <li><a href="#" class="display-flex-center"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" class="display-flex-center"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" class="display-flex-center"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Partner -->
        <section class="partner background-grey p-t-70 p-b-70">
            <h4 class="heading-section">Heading section</h4>
            <div class="container">
                <div class="partner-content">
                    <div class="row">
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="assets/images/home/partner-1.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="assets/images/home/partner-2.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="assets/images/home/partner-3.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="assets/images/home/partner-4.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="assets/images/home/partner-1.png" alt="">
                                </a>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </section>
@endsection
