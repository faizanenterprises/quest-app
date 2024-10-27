@extends('layouts.master')

@section('content')

    {{-- Main Wrapper--}}
<main class="wrapper">
    {{-- Page Header --}}
    <div class="wptb-page-heading" style="background-image: url({{ asset('questapp/assets/img/background/page-header-bg.jpg'  %});">
        <div class="container">
            <div class="wptb-item--inner">
                <h2 class="wptb-item--title ">Team Details</h2>
                <div class="wptb-breadcrumb-wrap">
                    <ul class="wptb-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><span>Team Details</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Details Content --}}
    <section class="blog-details">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-5 pe-md-5">
                    <div class="sidebar">
                        <div class="wptb-team-grid3">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('questapp/assets/img/team/9.jpg') }}" alt="img">
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h5 class="wptb-item--title">Jackson Reyan Miller</h5>
                                        <p class="wptb-item--position">Head Of Operation, quest</p>
                                    </div>

                                    <div class="wptb-team-ci-wrap">
                                        <div class="team-ci--inner">
                                            <h5 class="team-ci--title">Email Address</h5>
                                            <div class="team-ci--desc"><a href="mailto:jacksonmiller@email.com">jacksonmiller@email.com</a></div>
                                        </div>
                                    </div>

                                    <div class="wptb-team-ci-wrap">
                                        <div class="team-ci--inner">
                                            <h5 class="team-ci--title">Phone Number</h5>
                                            <div class="team-ci--desc"><a href="tel:+123 456 78999">+123 456 78999</a></div>
                                        </div>
                                    </div>

                                    <div class="wptb-team-ci-wrap">
                                        <div class="team-ci--inner">
                                            <h5 class="team-ci--title">Address</h5>
                                            <div class="team-ci--desc"><a href="#">231, Utah Downtown Mall, USA</a></div>
                                        </div>
                                    </div>

                                    <div class="wptb-item--social">
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                        <a href="#"><i class="bi bi-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-8 col-md-7 mt-5 mt-md-0">
                    <div class="blog-details-inner">
                        <div class="post-content">
                            <div class="post-header mt-0">
                                <h1 class="post-title">Work Experience</h1>
                            </div>
                            <div class="fulltext">
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore.
                                </p>
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <ul class="point-order p-0 mb-3">
                                            <li>Head Of Operation, Freight Corp</li>
                                            <li>Head Of Operation, DHL</li>
                                            <li>Head Of Operation, FedX</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="point-order p-0 mb-3">
                                            <li>Operation Team Lead, FedX</li>
                                            <li>Operation Team Lead, DHL</li>
                                            <li>Executive, FedX</li>
                                        </ul>
                                    </div>
                                </div>

                                <h4 class="widget-title">Educational Qualification</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                                <div class="row mt-4">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="process-step style-2 d-flex">
                                            <div class="serial">1</div>
                                            <div class="process-step-content">
                                                <h5>School Education</h5>
                                                <p>These are the concepts that shape our distinctive culture & differentiate us from others.</p>
                                            </div>
                                        </div>
                                        <div class="process-step style-2 d-flex">
                                            <div class="serial">3</div>
                                            <div class="process-step-content">
                                                <h5>Graduation</h5>
                                                <p>These are the concepts that shape our distinctive culture & differentiate us from others.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="process-step style-2 d-flex">
                                            <div class="serial">2</div>
                                            <div class="process-step-content">
                                                <h5>College Education</h5>
                                                <p>These are the concepts that shape our distinctive culture & differentiate us from others.</p>
                                            </div>
                                        </div>
                                        <div class="process-step style-2 d-flex">
                                            <div class="serial">4</div>
                                            <div class="process-step-content">
                                                <h5>Post Graduation</h5>
                                                <p>These are the concepts that shape our distinctive culture & differentiate us from others.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h4 class="widget-title">Professional Skills</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wptb-progressbar mb-4">
                                            <div class="wptb-progressbar--inner">
                                                <div class="wptb-progress--label">Visa Processing</div>
                                                <div class="progress" style="height: 6px;">
                                                    <div class="progress-bar bg-one" role="progressbar" style="width: 92%" aria-valuemin="0" aria-valuemax="100"><span class="wptb-progress--value">96%</span></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wptb-progressbar mb-4">
                                            <div class="wptb-progressbar--inner">
                                                <div class="wptb-progress--label">Visa Consultancy</div>
                                                <div class="progress" style="height: 6px;">
                                                    <div class="progress-bar bg-one" role="progressbar" style="width: 85%" aria-valuemin="0" aria-valuemax="100"><span class="wptb-progress--value">85%</span></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wptb-progressbar">
                                            <div class="wptb-progressbar--inner">
                                                <div class="wptb-progress--label">Immigration Consultancy</div>
                                                <div class="progress" style="height: 6px;">
                                                    <div class="progress-bar bg-one" role="progressbar" style="width: 75%" aria-valuemin="0" aria-valuemax="100"><span class="wptb-progress--value">75%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h4 class="widget-title">Awards</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                                <ul class="point-order p-0 m-0 d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <li>Employee of the month</li>
                                    <li>Best Consultant 2022</li>
                                    <li>Best Employee 2021</li>
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    {{-- End Details Content --}}


</main>

@endsection
