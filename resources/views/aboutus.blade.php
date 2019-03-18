@extends('layouts.app')

@section('content')
        <!-- Heading page -->
        <section class="heading-page">
            <img src="images/aboutus/aboutus-heading.jpg" alt="">
            <div class="heading-page-content position-center">
                <div class="page-title">
                    <h1>About us</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- About us -->
        <section class="about-us">
            <div class="container">
                <div class="about-us-content">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 about-us-info">
                            <div class="section-title-left">
                                <h2>Our Company</h2>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse commodo semper tristique. Suspendisse convallis ante urna, quis pharetra mauris suscipit ut. 
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur efficitur ex nibh, sed luctus velit posuere sit amet. Nullam eget libero id lorem tempus cursus. 
                                Donec fringilla est eu faucibus laoreet. Vivamus ut mattis lacus, quis ornare nibh.
                            </p>
                            <ul>
                                <li>
                                    <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <p>Duis mauris mauris congue a lobortis sit amet luctus at velit iquet.</p>
                                </li>
                                <li>
                                    <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <p>Phasellus sagittis non elit quis interdum egestas felis.</p>
                                </li>
                                <li>
                                    <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <p>Duis mauris mauris congue a lobortis sit amet luctus at velit ique Nam lacus ante, volutpat nec velit at, congue mollis mauris. Nullam sed tincidunt lacus, ac aliquam justo. </p>
                                </li>
                            </ul>
                            <p>
                                    Vivamus porttitor faucibus felis, vel eleifend enim malesuada ut. Integer at mi at massa efficitur convallis. Pellentesque et leo id velit interdum consectetur at in nulla. Maecenas congue hendrerit bibendum. Mauris tempor vel ligula eu aliquam. 
                                    Donec eget nunc a velit ornare cursus vitae at eros. Cras ut nisl dui. Aliquam erat volutpat. In lobortis ex molestie.
                            </p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 about-us-image">
                            <img src="images/aboutus/about-us.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Company skills -->
        <section class="company-skills">
            <div class="company-skills-video">
                <div class="skills-video bmd-modalButton" data-toggle="modal" data-target="#modal-video-01" data-bmdSrc="https://player.vimeo.com/video/112734492" data-bmdWidth="500" data-bmdHeight="281">
                    <figure class="skills-video">
                        <img src="images/aboutus/company-skill.jpg" alt="">
                        <span class="overgradient"> 
                        </span>
                        <div class="info">
                            <div class="video-title">Our Specialists Team</div>
                            <div class="video-desc">
                                <span>Russell Newman - </span>General Manager
                            </div>
                        </div>
                        <span class="icon-play"><i class="fa fa-play" aria-hidden="true"></i></span>
                    </figure>
                </div>
            </div>
            <div class="company-skills-content">
                <div class="section-title-left">
                    <h2>Company Skills</h2>
                </div>
                <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla molestie varius odio, vitae volutpat elit malesuada sit amet. 
                    Aenean cursus enim eu enim porta molestie. Integer fringilla sem vel dui condimentum ullamcorper. Pellentesque eu sodales urna.</div>
                <div class="company-skills-list">
                    <ul>
                        <li>
                            <div class="title-regular-14 display-flex">
                                <span>Construction Professional</span>
                                <span>90%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" style="width:90%"></div>
                            </div>
                        </li>
                        <li>
                            <div class="title-regular-14 display-flex">
                                <span>Team Work</span>
                                <span>85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" style="width:85%"></div>   
                            </div>
                        </li>
                        <li>
                            <div class="title-regular-14 display-flex">
                                <span>Creative Architecture</span>
                                <span>95%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" style="width:95%"></div>
                            </div>
                        </li>
                        <li>
                            <div class="title-regular-14 display-flex">
                                <span>Practical Experience</span>
                                <span>80%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" style="width:80%"></div>
                            </div>
                        </li>
                        <li>
                            <div class="title-regular-14 display-flex">
                                <span>Client Satisfaction</span>
                                <span>100%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" style="width:100%"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </section>
        
        <!-- Our Team -->
        <section class="about-team">
            <div class="container">
                <div class="section-title">
                    <h2>our team</h2>
                </div>
                <div class="our-team-content">
                    <div class="row">
                        <article class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 item">
                            <figure>
                                <img src="images/aboutus/our-team-1.jpg" alt="">
                                <div class="socials">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="info">
                                <div class="title">
                                    <h3 class="title-bold">
                                        Brandon Sullivan
                                    </h3>
                                </div>
                                <div class="desc">General Director</div>
                            </div>
                        </article>
                        <article class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 item">
                            <figure>
                                <img src="images/aboutus/our-team-2.jpg" alt="">
                                <div class="socials">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="info">
                                <div class="title">
                                    <h3 class="title-bold">
                                        Eugene Graham
                                    </h3>
                                </div>
                                <div class="desc">Manager</div>
                            </div>
                        </article>
                        <article class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 item">
                            <figure>
                                <img src="images/aboutus/our-team-3.jpg" alt="">
                                <div class="socials">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="info">
                                <div class="title">
                                    <h3 class="title-bold">
                                        Christina Gilbert
                                    </h3>
                                </div>
                                <div class="desc">Manager</div>
                            </div>
                        </article>
                        <article class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 item">
                            <figure>
                                <img src="images/aboutus/our-team-4.jpg" alt="">
                                <div class="socials">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="info">
                                <div class="title">
                                    <h3 class="title-bold">
                                        Charles Collins
                                    </h3>
                                </div>
                                <div class="desc">Worker</div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="why-choose-us">
            <div class="choose-us-content">
                <div class="choose-us-list">
                    <div class="choose-us-list-content">
                        <div class="section-title-left">
                            <h2>Why Choose Us</h2>
                        </div>
                        <ul id="accordion">
                            <li class="card active">
                                <div class="card-header" id="headingOne">
                                    <div class="title title-bold-16" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                                        Construction Team
                                    </div>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec magna  vulpuate nec felis semper, aliquam luctus metus. Vivamus blandit vestibulum viverra Pellentesque id mi lectus. Vestibulum ut ultrices sem. Suspendisse sit amet orsollicitudin, pretium ipsum consectetur, mattis quam. Etiam auctor et quam sit gravida. Sed malesuada vitae diam at volutpat.
                                    </div>
                                </div>
                            </li>
                            <li class="card">
                                <div class="card-header" id="headingTwo">
                                    <div class="title title-bold-16 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
                                        Building Protection Services
                                    </div>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec magna  vulpuate nec felis semper, aliquam luctus metus. Vivamus blandit vestibulum viverra Pellentesque id mi lectus. Vestibulum ut ultrices sem. Suspendisse sit amet orsollicitudin, pretium ipsum consectetur, mattis quam. Etiam auctor et quam sit gravida. Sed malesuada vitae diam at volutpat.
                                    </div>
                                </div>
                            </li>
                            <li class="card">
                                <div class="card-header" id="headingThree">
                                    <div class="title title-bold-16 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
                                        Professional Plumbing
                                    </div>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec magna  vulpuate nec felis semper, aliquam luctus metus. Vivamus blandit vestibulum viverra Pellentesque id mi lectus. Vestibulum ut ultrices sem. Suspendisse sit amet orsollicitudin, pretium ipsum consectetur, mattis quam. Etiam auctor et quam sit gravida. Sed malesuada vitae diam at volutpat.
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="statistics-company">
                    <div class="statistics-company-content">
                        <div class="section-title-left">
                            <h2>Statistics Company</h2>
                        </div>
                        <div class="statistics-content our-process-content">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/aboutus/icon-people-white.png" alt="">
                                    </a>
                                </figure>
                                <div class="info">
                                    <div class="count">10+</div>
                                    <div class="title">
                                        <h3 class="title-regular-14">
                                            <a href="#" class="font-color-white">
                                                Years Experience
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </article>
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/aboutus/icon-door-white.png" alt="">
                                    </a>
                                </figure>
                                <div class="info">
                                    <div class="count">600+</div>
                                    <div class="title">
                                        <h3 class="title-regular-14">
                                            <a href="#" class="font-color-white">
                                                Completed Projects
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </article>
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/aboutus/icon-cup-white.png" alt="">
                                    </a>
                                </figure>
                                <div class="info">
                                    <div class="count">15+</div>
                                    <div class="title">
                                        <h3 class="title-regular-14">
                                            <a href="#" class="font-color-white">
                                                Awards Received
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </article>
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/aboutus/icon-heart-white.png" alt="">
                                    </a>
                                </figure>
                                <div class="info">
                                    <div class="count">600+</div>
                                    <div class="title">
                                        <h3 class="title-regular-14">
                                            <a href="#" class="font-color-white">
                                                Completed Projects
                                            </a>
                                        </h3>   
                                    </div>
                                </div>
                            </article>
                            
                        </div>
                        <a href="#" class="btn-global btn-yellow btn-global-yellow-hover" data-text="Get A Quote">Get A Quote</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partner -->
        <section class="partner background-grey p-t-70 p-b-70">
            <div class="container">
                <div class="partner-content">
                    <div class="row">
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="images/home/partner-1.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="images/home/partner-2.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="images/home/partner-3.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="images/home/partner-4.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="images/home/partner-1.png" alt="">
                                </a>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </section>
@endsection
