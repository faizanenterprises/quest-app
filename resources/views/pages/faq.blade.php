@extends('layouts.master')

@section('content')

    {{-- Main Wrapper--}}
<main class="wrapper">
    {{-- Page Header --}}
    <div class="wptb-page-heading" style="background-image: url({{ asset('questapp/assets/img/background/page-header-bg.jpg') }});">
        <div class="container">
            <div class="wptb-item--inner">
                <h2 class="wptb-item--title ">FAQ</h2>
                <div class="wptb-breadcrumb-wrap">
                    <ul class="wptb-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><span>Frequently Ask Questions</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- FAQ's --}}
    <section>
        <div class="container">
            <div class="wptb-accordion wptb-accordion2 wow fadeInUp">
                <div class="wptb--item active">
                    <h6 class="wptb-item-title"><span>Q1. Which is the prerequisites for immigration?</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                    <div class="wptb-item--content">
                        Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly which customers or product groups are working.
                    </div>
                </div>

                <div class="wptb--item">
                    <h6 class="wptb-item-title"><span>Q2. What are the contact address of quest?</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                    <div class="wptb-item--content">
                        Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly which customers or product groups are working.
                    </div>
                </div>

                <div class="wptb--item">
                    <h6 class="wptb-item-title"><span>Q3. What IELTS Score required for Canada?</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                    <div class="wptb-item--content">
                        Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly which customers or product groups are working.
                    </div>
                </div>

                <div class="wptb--item">
                    <h6 class="wptb-item-title"><span>Q4. How much time needed for visa renewal?</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                    <div class="wptb-item--content">
                        Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly which customers or product groups are working.
                    </div>
                </div>
            </div>

            <div class="wptb-faq-form bg-image mr-top-100" style="background-image: url({{ asset('questapp/assets/img/background/bg-17.jpg') }});">
                <form class="wptb-form" action="{{ route('send_email') }}" method="post">
                    @csrf
                    <input type="hidden" name="form_source" value="faq">
                    <div class="wptb-form--inner">
                        <div class="wptb-heading">
                            <div class="wptb-item--inner">
                                <h2 class="wptb-item--title text-white"> <span>Want to ask more Questions?</span></h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="form-group">
                                    <input type="text" name="message_name" class="form-control" placeholder="Your Name*" required>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="form-group">
                                    <input type="email" name="message_email" class="form-control" placeholder="Email Address*" required>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="form-group">
                                    <input type="number" name="message_contactno" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-12 mb-4">
                                <div class="form-group">
                                    <input type="text" name="message_subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-12 mb-4">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Question Here" required></textarea>
                                </div>
                            </div>



                            <div class="col-md-12 col-lg-12">
                                <div class="wptb-item--button">
                                    <input class="btn" type="submit" value="Submit" name="submit">
                                </div>
                            </div>


                        </div>
                        <div >
                            @if (session('success'))
                                <br><br>
                                <div id="faqmessage" class="alert alert-success">
                                    Rashid khan
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


</main>

@endsection
