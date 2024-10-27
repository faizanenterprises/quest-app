@extends('layouts.master')

@section('content')

    {{-- Main Wrapper--}}
<main class="wrapper">
    {{-- Page Header --}}
    <div class="wptb-page-heading" style="background-image: url({{ asset('questapp/assets/img/background/page-header-bg.jpg') }});">
        <div class="container">
            <div class="wptb-item--inner">
                <h2 class="wptb-item--title ">Careers Grid</h2>
                <div class="wptb-breadcrumb-wrap">
                    <ul class="wptb-breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        {% comment %} <li><a href="#">Pages</a></li> {% endcomment %}
                        <li><span>Careers Grid</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Careers --}}
    <section>
        <div class="container">
            <div class="wptb-heading">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="wptb-item--inner">
                            <h6 class="wptb-item--subtitle">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M14.9119 2.10726L0.787131 7.08487C0.559931 7.16487 0.509531 7.36087 0.779131 7.46806L3.81593 8.68486L5.61593 9.40566L14.4031 2.95286C14.5215 2.86646 14.6575 3.02886 14.5719 3.12166L8.27513 9.93207V9.93366L7.91353 10.3361L8.39273 10.5937L12.3783 12.7393C12.6111 12.8641 12.9127 12.7609 12.9799 12.4721L15.3047 2.45206C15.3679 2.17766 15.1863 2.01046 14.9119 2.10726ZM5.59993 13.7297C5.59993 13.9265 5.71113 13.9817 5.86473 13.8425C6.06553 13.6593 8.14473 11.7937 8.14473 11.7937L5.59993 10.4785V13.7297Z" fill="#E13833"/>
                                    </svg>
                                </span>
                                career Opportunity
                            </h6>
                            <h1 class="wptb-item--title"> <span>Looking for Career Opportunity?</span></h1>
                        </div>
                    </div>

                    <div class="col-md-4 text-end">
                        <a href="careers.html" class="btn">
                            <span class="btn-wrap">
                                <span class="text-first">View All Circulars</span>
                                <span class="text-second">View All Circulars</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="wptb-career-grid">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--holder">
                                <span class="wptb-item--date">20 October, 2023</span>
                                <h3 class="wptb-item--title">Expert Truck Driver</h3>
                                <a class="wptb-button-link" href="tourist-visa.html"> <span class="btn-readmore--text"> Apply Here </span> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="wptb-career-grid">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--holder">
                                <span class="wptb-item--date">20 October, 2023</span>
                                <h3 class="wptb-item--title">Flight navigation Lineman</h3>
                                <a class="wptb-button-link" href="tourist-visa.html"> <span class="btn-readmore--text"> Apply Here </span> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="wptb-career-grid">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--holder">
                                <span class="wptb-item--date">20 October, 2023</span>
                                <h3 class="wptb-item--title">Warehouse Operator</h3>
                                <a class="wptb-button-link" href="tourist-visa.html"> <span class="btn-readmore--text"> Apply Here </span> </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="wptb-career-grid">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--holder">
                                <span class="wptb-item--date">20 October, 2023</span>
                                <h3 class="wptb-item--title">Computer Operator</h3>
                                <a class="wptb-button-link" href="tourist-visa.html"> <span class="btn-readmore--text"> Apply Here </span> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="wptb-career-grid">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--holder">
                                <span class="wptb-item--date">20 October, 2023</span>
                                <h3 class="wptb-item--title">Crossing Borders</h3>
                                <a class="wptb-button-link" href="tourist-visa.html"> <span class="btn-readmore--text"> Apply Here </span> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="wptb-career-grid">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--holder">
                                <span class="wptb-item--date">20 October, 2023</span>
                                <h3 class="wptb-item--title">Expert Truck Driver</h3>
                                <a class="wptb-button-link" href="tourist-visa.html"> <span class="btn-readmore--text"> Apply Here </span> </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="wptb-career-grid">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--holder">
                                <span class="wptb-item--date">20 October, 2023</span>
                                <h3 class="wptb-item--title">Train Mechanic</h3>
                                <a class="wptb-button-link" href="tourist-visa.html"> <span class="btn-readmore--text"> Apply Here </span> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="wptb-career-grid">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--holder">
                                <span class="wptb-item--date">20 October, 2023</span>
                                <h3 class="wptb-item--title">Visa Consultant</h3>
                                <a class="wptb-button-link" href="tourist-visa.html"> <span class="btn-readmore--text"> Apply Here </span> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="wptb-career-grid">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--holder">
                                <span class="wptb-item--date">20 October, 2023</span>
                                <h3 class="wptb-item--title">Crossing Borders</h3>
                                <a class="wptb-button-link" href="tourist-visa.html"> <span class="btn-readmore--text"> Apply Here </span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

@endsection
