@extends('layouts.app')
@section('content')

   <!-- Heading page -->
        <section class="heading-page">
            <img src="images/project/projetc-heading.jpg" alt="">
            <div class="heading-page-content position-center">
                <div class="page-title">
                    <h1>Grid 3 Columns</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Projects</li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- Projects -->
        <section class="projects p-t-80 p-b-80">
            <h4 class="heading-section">Heading section</h4>
            <div class="container">
                <div class="projects-content">
                    <ul class="filter-projects display-flex-center">
                        <li><span class="is-checked" data-filter="*">All</span></li>
                        <li><span data-filter=".building">Building</span></li>
                        <li><span data-filter=".greencampus">Green Campus</span></li>
                        <li><span data-filter=".interiordesign">Interior  Design</span></li>
                        <li><span data-filter=".education">Education</span></li>
                        <li><span data-filter=".office">Office</span></li>
                    </ul>

                    <div class="grid">
                        <div class="row">
                            <article class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item element-item building education">
                                <figure class="figure-hover">
                                    <a href="#">
                                        <img src="images/project/project-1.jpg" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                </figure>
                                <div class="info position-center">
                                    <div class="title">
                                        <h3 class="title-bold-white title-bold">
                                            The Sharp Building
                                        </h3>
                                    </div>
                                    <div class="desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec magna massa, vulputate nec felis semper, metus.
                                    </div>
                                </div>
                                <a href="#" class="view-more">View more</a>
                            </article>
                            <article class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item element-item greencampus">
                                <figure class="figure-hover">
                                    <a href="#">
                                        <img src="images/project/project-2.jpg" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                </figure>
                                <div class="info position-center">
                                    <div class="title">
                                        <h3 class="title-bold-white title-bold">
                                            The Sharp Building
                                        </h3>
                                    </div>
                                    <div class="desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec magna massa, vulputate nec felis semper, metus.
                                    </div>
                                </div>
                                <a href="#" class="view-more">View more</a>
                            </article>
                            <article class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item element-item greencampus">
                                <figure class="figure-hover">
                                    <a href="#">
                                        <img src="images/project/project-3.jpg" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                </figure>
                                <div class="info position-center">
                                    <div class="title">
                                        <h3 class="title-bold-white title-bold">
                                            The Sharp Building
                                        </h3>
                                    </div>
                                    <div class="desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec magna massa, vulputate nec felis semper, metus.
                                    </div>
                                </div>
                                <a href="#" class="view-more">View more</a>
                            </article>
                            <article class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item element-item interiordesign office">
                                <figure class="figure-hover">
                                    <a href="#">
                                        <img src="images/project/project-6.jpg" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                </figure>
                                <div class="info position-center">
                                    <div class="title">
                                        <h3 class="title-bold-white title-bold">
                                            The Sharp Building
                                        </h3>
                                    </div>
                                    <div class="desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec magna massa, vulputate nec felis semper, metus.
                                    </div>
                                </div>
                                <a href="#" class="view-more">View more</a>
                            </article>
                            <article class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item element-item building office">
                                <figure class="figure-hover">
                                    <a href="#">
                                        <img src="images/project/project-5.jpg" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                </figure>
                                <div class="info position-center">
                                    <div class="title">
                                        <h3 class="title-bold-white title-bold">
                                            The Sharp Building
                                        </h3>
                                    </div>
                                    <div class="desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec magna massa, vulputate nec felis semper, metus.
                                    </div>
                                </div>
                                <a href="#" class="view-more">View more</a>
                            </article>
                            <article class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item element-item building">
                                <figure class="figure-hover">
                                    <a href="#">
                                        <img src="images/project/project-4.jpg" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                </figure>
                                <div class="info position-center">
                                    <div class="title">
                                        <h3 class="title-bold-white title-bold">
                                            The Sharp Building
                                        </h3>
                                    </div>
                                    <div class="desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec magna massa, vulputate nec felis semper, metus.
                                    </div>
                                </div>
                                <a href="#" class="view-more">View more</a>
                            </article>
                            <article class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item element-item education">
                                <figure class="figure-hover">
                                    <a href="#">
                                        <img src="images/project/project-7.jpg" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                </figure>
                                <div class="info position-center">
                                    <div class="title">
                                        <h3 class="title-bold-white title-bold">
                                            The Sharp Building
                                        </h3>
                                    </div>
                                    <div class="desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec magna massa, vulputate nec felis semper, metus.
                                    </div>
                                </div>
                                <a href="#" class="view-more">View more</a>
                            </article>
                            <article class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item element-item building greencampus interiordesign">
                                <figure class="figure-hover">
                                    <a href="#">
                                        <img src="images/project/project-8.jpg" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                </figure>
                                <div class="info position-center">
                                    <div class="title">
                                        <h3 class="title-bold-white title-bold">
                                            The Sharp Building
                                        </h3>
                                    </div>
                                    <div class="desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec magna massa, vulputate nec felis semper, metus.
                                    </div>
                                </div>
                                <a href="#" class="view-more">View more</a>
                            </article>
                            <article class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item element-item interiordesign office">
                                <figure class="figure-hover">
                                    <a href="#">
                                        <img src="images/project/project-5.jpg" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                </figure>
                                <div class="info position-center">
                                    <div class="title">
                                        <h3 class="title-bold-white title-bold">
                                            The Sharp Building
                                        </h3>
                                    </div>
                                    <div class="desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec magna massa, vulputate nec felis semper, metus.
                                    </div>
                                </div>
                                <a href="#" class="view-more">View more</a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partner -->
        <section class="partner background-grey p-t-70 p-b-70">
            <h4 class="heading-section">Heading section</h4>
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
    </main>


@endsection