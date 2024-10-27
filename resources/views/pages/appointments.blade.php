@extends('layouts.master')

@section('content')

    {{-- Main Wrapper--}}
<main class="wrapper">
    {{-- Page Header --}}
    <div class="wptb-page-heading" style="background-image: url({{ asset('questapp/assets/img/background/page-header-bg.jpg') }});">
        <div class="container">
            <div class="wptb-item--inner">
                <h2 class="wptb-item--title ">Make Appointmet</h2>
                <div class="wptb-breadcrumb-wrap">
                    <ul class="wptb-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><span>Make Appointmet</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Make Appointmet --}}
    <section class="wptb-make-appointment">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="wptb-heading">
                        <div class="wptb-item--inner">
                            <h6 class="wptb-item--subtitle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                                    <path d="M14.9119 0.107265L0.787131 5.08487C0.559931 5.16487 0.509531 5.36087 0.779131 5.46806L3.81593 6.68486L5.61593 7.40566L14.4031 0.952865C14.5215 0.866465 14.6575 1.02886 14.5719 1.12166L8.27513 7.93207V7.93366L7.91353 8.33607L8.39273 8.59367L12.3783 10.7393C12.6111 10.8641 12.9127 10.7609 12.9799 10.4721L15.3047 0.452065C15.3679 0.177665 15.1863 0.0104648 14.9119 0.107265ZM5.59993 11.7297C5.59993 11.9265 5.71113 11.9817 5.86473 11.8425C6.06553 11.6593 8.14473 9.79366 8.14473 9.79366L5.59993 8.47847V11.7297Z" fill="#E13833"/>
                                </svg>
                                Make Appointment
                            </h6>
                            <h2 class="wptb-item--title"> <span>Want to meet us for <br>
                                your need?</span></h2>
                        </div>
                    </div>

                    <div class="wptb-banner">
                        <div class="wptb-banner-inner bg-imager" style="background-image: url({{ asset('questapp/assets/img/more/card.jpg') }})">
                            <h4 class="wptb-banner-title text-white">Have any questions?</h4>
                            <p class="wptb-banner-desc text-white">24/7 customer support is always ready to answer all your questions</p>
                            <a href="contact-1.html" class="btn">
                                <span class="btn-wrap">
                                    <span class="text-first">Ask Here</span>
                                    <span class="text-second">Ask Here</span>
                                </span>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <div id="calendar" class="wptb-fullcalendar"></div>
                </div>
            </div>

            <div class="wptb-contact-form-two mr-top-100">
                <div class="wptb-form--wrapper">
                    <form class="wptb-form" action="https://wpthemebooster.com/demo/themeforest/html/quest/contact.php" method="post">
                        <div class="wptb-form--inner">
                            <h4 class="mb-4">Please confirm that you would like to request the following appointment:</h4>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mb-4">
                                    <div class="form-group">
                                        <input class="flatpickr" type="text" name="calendar" placeholder="Select Date">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name*" required>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="number" name="phone" class="form-control" placeholder="Phone No">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control" placeholder="Address">
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-12 mb-4">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" placeholder="Text"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 mb-4">
                                    <div class="wptb-radio-list d-flex align-items-center">
                                        <div class="form-group">
                                            <input type="radio" name="canada">
                                            <label for="canada">Canada Immigration</label>
                                        </div>

                                        <div class="form-group">
                                            <input type="radio" name="canada">
                                            <label for="canada">Canada Immigration</label>
                                        </div>

                                        <div class="form-group">
                                            <input type="radio" name="canada">
                                            <label for="canada">Canada Immigration</label>
                                        </div>

                                        <div class="form-group">
                                            <input type="radio" name="canada">
                                            <label for="canada">Canada Immigration</label>
                                        </div>
                                    </div>

                                    <div class="wptb-radio-list d-flex align-items-center">
                                        <div class="form-group">
                                            <input type="radio" name="canada">
                                            <label for="canada">Canada Immigration</label>
                                        </div>

                                        <div class="form-group">
                                            <input type="radio" name="canada">
                                            <label for="canada">Canada Immigration</label>
                                        </div>

                                        <div class="form-group">
                                            <input type="radio" name="canada">
                                            <label for="canada">Canada Immigration</label>
                                        </div>

                                        <div class="form-group">
                                            <input type="radio" name="canada">
                                            <label for="canada">Canada Immigration</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-12 mt-4">
                                    <button type="submit" class="btn text-center w-100">
                                        <span class="btn-readmore--text">Request Appointment </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </section>

    {{-- Newsletter --}}
    <div class="wptb-newsletter bg-image" style="background-image: url({{ asset('questapp/assets/img/background/bg-16.jpg') }});">
        <div class="container">
            <div class="wptb-item--inner">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <h1 class="wptb-item--title wow fadeInLeft">Subscribe To quest
                            For All the offers</h1>
                    </div>
                    <div class="col-md-6">
                        <form class="newsletter-form" method="post">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <button type="submit" class="btn-readmore style-icon">
                                <span class="btn-readmore--icon"> <i class="bi bi-send"></i> </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection
