@extends('layouts.master')

@section('content')

    {{-- Main Wrapper--}}
<main class="wrapper">
    {{-- Page Header --}}
    <div class="wptb-page-heading" style="background-image: url({{ asset('questapp/assets/img/background/page-header-bg.jpg') }});">
        <div class="container">
            <div class="wptb-item--inner">
                <h2 class="wptb-item--title ">Contact Us</h2>
                <div class="wptb-breadcrumb-wrap">
                    <ul class="wptb-breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><span>Contact Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Contact Us --}}
    <section class="wptb-contact-page-wrapper">
        <div class="container">
            <div class="wptb-contact-infos">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('questapp/assets/img/more/4.jpg') }}" alt="img">
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <img src="{{ asset('questapp/assets/img/more/mail.png') }}" alt="icon">
                                    </div>
                                    <h4 class="wptb-item--title">Send Us Mail</h4>
                                    <p class="wptb-item--description">

                                        <a href="mailto:info@qimmigration.ca">info@qimmigration.ca</a><br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('questapp/assets/img/more/5.jpg') }}" alt="img">
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <img src="{{ asset('questapp/assets/img/more/phone.png') }}" alt="icon">
                                    </div>
                                    <h4 class="wptb-item--title">Call Us Anytime</h4>
                                    <p class="wptb-item--description">

                                        <a href="tel:+98765432122814">+1 (306) 351-1900</a><br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('questapp/assets/img/more/6.jpg') }}" alt="img">
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <img src="{{ asset('questapp/assets/img/more/map-pin.png') }}" alt="icon">
                                    </div>
                                    <h4 class="wptb-item--title">Visit Our Office</h4>
                                    <p class="wptb-item--description"> 1757 Halifax Street, Regina,   <br>
                                        SK S4P 1T2 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wptb-contact-form-one">
                <div class="wptb-form--wrapper">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 offset-lg-2 offset-md-1">
                            <form class="wptb-form" action="{{ route('send_email') }}" method="post">
                                @csrf
                                <input type="hidden" name="form_source" value="contact">
                                <div class="wptb-form--inner">
                                    <div class="wptb-heading">
                                        <div class="wptb-item--inner text-center">
                                            <h2 class="wptb-item--title"> <span>Drop Us A line</span></h2>
                                            <p class="wptb-item--description"> Quest Immigration inc will help you to solve your problem</p>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <input type="text" name="message_name" class="form-control" placeholder="Name*" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <input type="number" name="message_contactno" class="form-control" placeholder="Phone No">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <input type="email" name="message_email" class="form-control" placeholder="E-mail*" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <input type="text" name="message_subject" class="form-control" placeholder="Subject">
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-12 mb-4">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="Text"></textarea>
                                            </div>
                                        </div>

                                        <div  class="col-md-12 col-lg-12">
                                            <div class="wptb-item--button text-center">
                                                <input class="btn" type="submit" value="Contact Us" name="submit">
                                            </div>
                                        </div>

                                        <div >
                                            @if (session('success'))
                                                <br><br>
                                                <div id="contactmessage" class="alert alert-success">

                                                    {{ session('success') }}
                                                </div>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
