@extends('layouts.master')

@section('content')

    {{-- Main Wrapper--}}
<main class="wrapper">
    {{-- Page Header --}}
    <div class="wptb-page-heading" style="background-image: url({{ asset('questapp/assets/img/background/page-header-bg.jpg') }});">
        <div class="container">
            <div class="wptb-item--inner">
                <h2 class="wptb-item--title ">Case Studies</h2>
                <div class="wptb-breadcrumb-wrap">
                    <ul class="wptb-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><span>Case Studies</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Case Studies --}}
    <section class="wptb-case-studies-one">
        <div class="container">
            <div class="wptb-heading">
                <div class="wptb-item--inner text-center">
                    <h6 class="wptb-item--subtitle">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M14.9119 2.10726L0.787131 7.08487C0.559931 7.16487 0.509531 7.36087 0.779131 7.46806L3.81593 8.68486L5.61593 9.40566L14.4031 2.95286C14.5215 2.86646 14.6575 3.02886 14.5719 3.12166L8.27513 9.93207V9.93366L7.91353 10.3361L8.39273 10.5937L12.3783 12.7393C12.6111 12.8641 12.9127 12.7609 12.9799 12.4721L15.3047 2.45206C15.3679 2.17766 15.1863 2.01046 14.9119 2.10726ZM5.59993 13.7297C5.59993 13.9265 5.71113 13.9817 5.86473 13.8425C6.06553 13.6593 8.14473 11.7937 8.14473 11.7937L5.59993 10.4785V13.7297Z" fill="#E13833"/>
                            </svg>
                        </span>
                        Case Studies
                    </h6>
                    <h1 class="wptb-item--title"> <span>Our Successful Case Studies</span></h1>
                </div>
            </div>

            <div class="wptb-case-studies--inner">
                <div class="portfolio-filters-content">
                    <div class="filters-button-group">
                        <button class="button is-checked" data-filter="*">All </button>
                        <button class="button" data-filter=".refugee">Asylum & Refugee Case</button>
                        <button class="button" data-filter=".family">Family Sponsorship Case</button>
                        <button class="button" data-filter=".skill">Skilled Worker Visa Scenarios</button>
                        <button class="button" data-filter=".student">Student Visa Challenges</button>
                    </div>
                </div>
                <div class="grid grid-4 gutter-15 clearfix">
                    <div class="grid-sizer"></div>

                    <div class="grid-item refugee">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--image">
                                <img src="{{ asset('questapp/assets/img/cases/1.jpg') }}" alt=""/>
                            </div>
                            <div class="wptb-item--holder">
                                <div class="wptb-item--meta">
                                    <h3 class="wptb-item--title"><a href="case-details.html">Spousal Visa (US)</a></h3>
                                    <div class="wptb-item--divider"></div>
                                    <p class="wptb-item--description"> Asylum and Refugee Cases</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item family">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--image">
                                <img src="{{ asset('questapp/assets/img/cases/2.jpg') }}" alt=""/>
                            </div>
                            <div class="wptb-item--holder">
                                <div class="wptb-item--meta">
                                    <h3 class="wptb-item--title"><a href="case-details.html">Retirement Visa (Thailand)</a></h3>
                                    <div class="wptb-item--divider"></div>
                                    <p class="wptb-item--description"> Skilled Worker Visa Scenarios</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item student">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--image">
                                <img src="{{ asset('questapp/assets/img/cases/3.jpg') }}" alt=""/>
                            </div>
                            <div class="wptb-item--holder">
                                <div class="wptb-item--meta">
                                    <h3 class="wptb-item--title"><a href="case-details.html">Student Visa (Australis)</a></h3>
                                    <div class="wptb-item--divider"></div>
                                    <p class="wptb-item--description"> Student Visa Chllenges</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item refugee">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--image">
                                <img src="{{ asset('questapp/assets/img/cases/4.jpg') }}" alt=""/>
                            </div>
                            <div class="wptb-item--holder">
                                <div class="wptb-item--meta">
                                    <h3 class="wptb-item--title"><a href="case-details.html">Retirement Visa (Thailand)</a></h3>
                                    <div class="wptb-item--divider"></div>
                                    <p class="wptb-item--description"> Skilled Worker Visa Scenarios</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item family">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--image">
                                <img src="{{ asset('questapp/assets/img/cases/5.jpg') }}" alt=""/>
                            </div>
                            <div class="wptb-item--holder">
                                <div class="wptb-item--meta">
                                    <h3 class="wptb-item--title"><a href="case-details.html">Student Visa (Thailand)</a></h3>
                                    <div class="wptb-item--divider"></div>
                                    <p class="wptb-item--description"> Skilled Worker Visa Scenarios</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item family">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--image">
                                <img src="{{ asset('questapp/assets/img/cases/6.jpg') }}" alt=""/>
                            </div>
                            <div class="wptb-item--holder">
                                <div class="wptb-item--meta">
                                    <h3 class="wptb-item--title"><a href="case-details.html">Refugee Asylum (Germany)</a></h3>
                                    <div class="wptb-item--divider"></div>
                                    <p class="wptb-item--description"> Asylum and Refugee Cases</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item family">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--image">
                                <img src="{{ asset('questapp/assets/img/cases/7.jpg') }}" alt=""/>
                            </div>
                            <div class="wptb-item--holder">
                                <div class="wptb-item--meta">
                                    <h3 class="wptb-item--title"><a href="case-details.html">Retirement Visa (Thailand)</a></h3>
                                    <div class="wptb-item--divider"></div>
                                    <p class="wptb-item--description"> Skilled Worker Visa Scenarios</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item family">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--image">
                                <img src="{{ asset('questapp/assets/img/cases/8.jpg') }}" alt=""/>
                            </div>
                            <div class="wptb-item--holder">
                                <div class="wptb-item--meta">
                                    <h3 class="wptb-item--title"><a href="case-details.html">Retirement Visa (Thailand)</a></h3>
                                    <div class="wptb-item--divider"></div>
                                    <p class="wptb-item--description"> Skilled Worker Visa Scenarios</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item skill">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--image">
                                <img src="{{ asset('questapp/assets/img/cases/2.jpg') }}" alt=""/>
                            </div>
                            <div class="wptb-item--holder">
                                <div class="wptb-item--meta">
                                    <h3 class="wptb-item--title"><a href="case-details.html">Retirement Visa (Thailand)</a></h3>
                                    <div class="wptb-item--divider"></div>
                                    <p class="wptb-item--description"> Skilled Worker Visa Scenarios</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item family">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--image">
                                <img src="{{ asset('questapp/assets/img/cases/5.jpg') }}" alt=""/>
                            </div>
                            <div class="wptb-item--holder">
                                <div class="wptb-item--meta">
                                    <h3 class="wptb-item--title"><a href="case-details.html">Family Sponsorship (Canada)</a></h3>
                                    <div class="wptb-item--divider"></div>
                                    <p class="wptb-item--description"> Family Sponsorship Case</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button id="load-more" class="btn text-center w-100 mt-3">
                    <span class="btn-wrap">
                        <span class="text-first">Load More</span>
                        <span class="text-second">Load More</span>
                    </span>
                </button>
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
