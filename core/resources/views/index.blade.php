@extends('layouts.homemaster')
@section('content')
    <!-- START ABOUT DESIGN AREA -->
    <section id="about" class="about-me-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- START ABOUT TEXT AREA -->
                    <div class="about-text">
                        <h2 class="wow fadeInUp text-center" data-wow-delay="0.6s">{{$about->title}}</h2>
                        <p class="wow fadeInUp text-center" data-wow-delay="0.8s">{{$about->description}}</p>
                    </div>
                    <!-- / END ABOUT TEXT AREA -->
                    <!-- START SOCIAL AREA -->
                    <div class="social-links text-center">
                        <ul>
                            @foreach($social as $socials)
                            <li><a href="{{$socials->link}}"><i class="fa fa-{{$socials->icon}}"></i></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- END SOCIAL AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END ABOUT DESIGN AREA -->

    <!-- START SKILL DESIN AREA -->
    <section id="skills" class="my-skill-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="section-title">
                        <h2>{{$service->title}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START KEY SKILL DESIGN AREA -->
                <p class="wow fadeInUp text-center" data-wow-delay="0.8s">{{$service->detail}}</p>
                <!-- / END KEY SKILL DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END SKILL DESIN AREA -->


    <!-- START SERVICES DESIGN AREA -->
    <section class="work-process-area section-padding">
        <div class="container">
            <div class="row">
                @foreach($tserv as $serv)
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-md-3 col-sm-6 text-center single-process-box-left">
                    <div class="single-process wow fadeInUp" data-wow-delay="0.2s">
                        <i class="fa fa-{{$serv->icon}}"></i>
                        <h2>{{$serv->title}}</h2>
                        <p>{{$serv->link}}</p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
                    @endforeach
            </div>
        </div>
    </section>
    <!-- / END SERVICES DESIGN AREA -->


    <!-- START WORK DESIGN AREA -->
    <section id="work" class="work section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>My recent works.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="work">
                    <li class="filter" data-filter="all">all</li>
                    <li class="filter" data-filter=".webdesign">webdesign</li>
                    <li class="filter" data-filter=".development">development</li>
                    <li class="filter" data-filter=".photography">photography</li>
                </ul>
            </div>
            <div class="work-inner">
                <div class="row work-posts">
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-4 mix webdesign">
                        <div class="item wow fadeInUp" data-wow-delay="0.2s">
                            <a href="assets/boss/images/portfolio/1.jpg" class="work-popup">
                                <img src="assets/boss/images/portfolio/1.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-4 mix development">
                        <div class="item wow fadeInUp" data-wow-delay="0.4s">
                            <a href="assets/boss/images/portfolio/2.jpg" class="work-popup">
                                <img src="assets/boss/images/portfolio/2.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-4 mix web">
                        <div class="item wow fadeInUp" data-wow-delay="0.6s">
                            <a href="assets/boss/images/portfolio/3.jpg" class="work-popup">
                                <img src="assets/boss/images/portfolio/3.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-4 mix development photography">
                        <div class="item wow fadeInUp" data-wow-delay="0.8s">
                            <a href="assets/boss/images/portfolio/4.jpg" class="work-popup">
                                <img src="assets/boss/images/portfolio/4.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-4 mix typography web">
                        <div class="item wow fadeInUp" data-wow-delay="1s">
                            <a href="assets/boss/images/portfolio/5.jpg" class="work-popup">
                                <img src="assets/boss/images/portfolio/5.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-4 mix webdesign development photography">
                        <div class="item wow fadeInUp" data-wow-delay="1.2s">
                            <a href="assets/boss/images/portfolio/6.jpg" class="work-popup">
                                <img src="assets/boss/images/portfolio/6.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END START WORK DESIGN AREA -->

    <!-- START TESTIMONIAL DESIGN AREA -->
    <section id="testimonial" class="testimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>What people say.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial-list">
                    <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                    <div class="single-testimonial text-center">
                        <img src="assets/boss/images/testimonial/1.jpg" class="img-circle" alt="">
                        <h2>Jasica Doe</h2>
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <i class="fa fa-quote-right"></i>
                    </div>
                    <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                    <div class="single-testimonial text-center">
                        <img src="assets/boss/images/testimonial/2.jpg" class="img-circle" alt="">
                        <h2>William</h2>
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <i class="fa fa-quote-right"></i>
                    </div>
                    <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                    <div class="single-testimonial text-center">
                        <img src="assets/boss/images/testimonial/3.jpg" class="img-circle" alt="">
                        <h2>David Herry</h2>
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <i class="fa fa-quote-right"></i>
                    </div>
                    <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                    <div class="single-testimonial text-center">
                        <img src="assets/boss/images/testimonial/1.jpg" class="img-circle" alt="">
                        <h2>Jasica Doe</h2>
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <i class="fa fa-quote-right"></i>
                    </div>
                    <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                    <div class="single-testimonial text-center">
                        <img src="assets/boss/images/testimonial/2.jpg" class="img-circle" alt="">
                        <h2>William</h2>
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <i class="fa fa-quote-right"></i>
                    </div>
                    <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                    <div class="single-testimonial text-center">
                        <img src="assets/boss/images/testimonial/3.jpg" class="img-circle" alt="">
                        <h2>David Herry</h2>
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <i class="fa fa-quote-right"></i>
                    </div>
                    <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END TESTIMONIAL DESIGN AREA -->

    <!-- START PRICING DESIGN AREA -->
    <section id="pricing" class="pricing-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>my pricing.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START SINGLE PRICING DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="pricing-box">
                        <div class="pricing-header">
                            <div class="plan-title">
                                <h4>basic plan</h4>
                            </div>
                            <div class="plan-price">
                                $99
                            </div>
                            <div class="plan-month text-muted">
                                per month
                            </div>
                        </div>
                        <ul class="list-unstyled plan-features">
                            <li>Basic Updates</li>
                            <li>Basic Features</li>
                            <li>Community Support</li>
                        </ul>
                        <a class="learn-more" href="#">buy now</a>
                    </div>
                </div>
                <!-- / END SINGLE PRICING DESIGN AREA -->
                <!-- START SINGLE PRICING DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="pricing-box">
                        <div class="pricing-header">
                            <div class="plan-title">
                                <h4>standard plan</h4>
                            </div>
                            <div class="plan-price">
                                $199
                            </div>
                            <div class="plan-month text-muted">
                                per month
                            </div>
                        </div>
                        <ul class="list-unstyled plan-features">
                            <li>Basic Updates</li>
                            <li>Basic Features</li>
                            <li>Community Support</li>
                        </ul>
                        <a class="learn-more" href="#">buy now</a>
                    </div>
                </div>
                <!-- / END SINGLE PRICING DESIGN AREA -->
                <!-- START SINGLE PRICING DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="pricing-box">
                        <div class="pricing-header">
                            <div class="plan-title">
                                <h4>premium plan</h4>
                            </div>
                            <div class="plan-price">
                                $299
                            </div>
                            <div class="plan-month text-muted">
                                per month
                            </div>
                        </div>
                        <ul class="list-unstyled plan-features">
                            <li>Basic Updates</li>
                            <li>Basic Features</li>
                            <li>Community Support</li>
                        </ul>
                        <a class="learn-more" href="#">buy now</a>
                    </div>
                </div>
                <!-- / END SINGLE PRICING DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END PRICING DESIGN AREA -->


    <!-- START BLOG DESIGN AREA -->
    <section id="blog" class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>my Latest blog.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START SINGLE BLOG DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-blog">
                        <div class="blog-description text-center">
                            <img src="assets/boss/images/blog/blog1.jpg" alt="">
                            <h4>Hey, what's up?!</h4>
                            <h6>date:07 oct 16</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            <a href="single-blog.blade.php" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE BLOG DESIGN AREA -->
                <!-- START SINGLE BLOG DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-blog">
                        <div class="blog-description text-center">
                            <img src="assets/boss/images/blog/blog2.jpg" alt="">
                            <h4>Hey, what's up?!</h4>
                            <h6>date:07 oct 16</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            <a href="single-blog.blade.php" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE BLOG DESIGN AREA -->
                <!-- START SINGLE BLOG DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-blog">
                        <div class="blog-description text-center">
                            <img src="assets/boss/images/blog/blog3.jpg" alt="">
                            <h4>Hey, what's up?!</h4>
                            <h6>date:07 oct 16</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            <a href="single-blog.blade.php" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE BLOG DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END BLOG DESIGN AREA -->

    <!-- START CONTACT DESIGN AREA -->
    <section id="contact" class="contact-me-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Do you have any project?</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- START CONTACT FORM DESIGN AREA -->
                    <div class="contact-form">
                        <form id="contact-form" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" id="first-name" placeholder="Name" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea rows="6" name="message" class="form-control" id="description" placeholder="Your Message" required="required"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="actions">
                                        <input type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Submit Your Message!">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- / END CONTACT FORM DESIGN AREA -->
                </div>

                <div class="col-md-12">
                    <!-- START CONTACT DETAILS DESIGN AREA -->
                    <div class="contact-details-area wow fadeInUp" data-wow-delay=".2s">
                        <div class="col-md-12 col-sm-6">
                            <div class="single-contact-details text-center">
                                <span class="lnr lnr-phone-handset"></span>
                                <h4>phone</h4>
                                <p class="text-muted">+1 111 222 3333</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6">
                            <div class="single-contact-details text-center">
                                <span class="lnr lnr-envelope"></span>
                                <h4>E-mail</h4>
                                <p class="text-muted">support@dueza.com</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6">
                            <div class="single-contact-details text-center">
                                <span class="lnr lnr-map-marker"></span>
                                <h4>Address</h4>
                                <p class="text-muted">New York, United States</p>
                            </div>
                        </div>
                    </div>
                    <!-- / END CONTACT DETAILS DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END CONTACT DESIGN AREA -->

    <!-- START FOOTER DESIGN AREA -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center wow fadeInUp" data-wow-delay="1s">
                    <p>&copy; 2016 BOSS | All Right Reserved By DuezaThemes</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- / END FOOTER DESIGN AREA -->
@endsection