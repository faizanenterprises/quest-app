@extends('layouts.master')

@section('content')

    {{-- Main Wrapper--}}
<main class="wrapper">
    {{-- Page Header --}}
    <div class="wptb-page-heading" style="background-image: url({{ asset('questapp/assets/img/background/page-header-bg.jpg') }});">
        <div class="container">
            <div class="wptb-item--inner">
                <h2 class="wptb-item--title ">Country List</h2>
                <div class="wptb-breadcrumb-wrap">
                    <ul class="wptb-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><span>Country List</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Country List --}}
    <section>
        <div class="container">
            <div class="wptb-heading">
                <div class="wptb-item--inner text-center">
                    <h6 class="wptb-item--subtitle">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M14.9119 2.10726L0.787131 7.08487C0.559931 7.16487 0.509531 7.36087 0.779131 7.46806L3.81593 8.68486L5.61593 9.40566L14.4031 2.95286C14.5215 2.86646 14.6575 3.02886 14.5719 3.12166L8.27513 9.93207V9.93366L7.91353 10.3361L8.39273 10.5937L12.3783 12.7393C12.6111 12.8641 12.9127 12.7609 12.9799 12.4721L15.3047 2.45206C15.3679 2.17766 15.1863 2.01046 14.9119 2.10726ZM5.59993 13.7297C5.59993 13.9265 5.71113 13.9817 5.86473 13.8425C6.06553 13.6593 8.14473 11.7937 8.14473 11.7937L5.59993 10.4785V13.7297Z" fill="#E13833"/>
                            </svg>
                        </span>
                        Country List
                    </h6>
                    <h1 class="wptb-item--title"> <span>The Countries we serve for <br>
                        visa & Immigration</span></h1>
                </div>
            </div>

            <div class="wptb-country-list--inner">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="wptb-country-grid">
                            <div class="wptb-icon-box1 wow fadeInLeft">
                                <div class="wptb-item--inner flex-start">
                                    <div class="wptb-item--icon"><img src="{{ asset('questapp/assets/img/country/korea.jpg') }}" alt=""></div>
                                    <div class="wptb-item--holder">
                                        <p class="wptb-item--description">Visa Services</p>
                                        <h5 class="wptb-item--title">Korea</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="wptb-list1">
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Visitor Visa</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Student Visa and Admission</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Work Visa – H1B</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Business Visa</div>
                                </div>
                            </div>

                            <div class="wptb-item--button">
                                <a class="btn--readmore" href="country-details.html">
                                    <span class="btn-readmore--text"> Read More </span> <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="wptb-country-grid">
                            <div class="wptb-icon-box1 wow fadeInLeft">
                                <div class="wptb-item--inner flex-start">
                                    <div class="wptb-item--icon"><img src="{{ asset('questapp/assets/img/country/uk.jpg') }}" alt=""></div>
                                    <div class="wptb-item--holder">
                                        <p class="wptb-item--description">Visa Services</p>
                                        <h5 class="wptb-item--title">UK</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="wptb-list1">
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Visitor Visa</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Student Visa and Admission</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Work Visa – H1B</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Business Visa</div>
                                </div>
                            </div>

                            <div class="wptb-item--button">
                                <a class="btn--readmore" href="country-details.html">
                                    <span class="btn-readmore--text"> Read More </span> <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="wptb-country-grid">
                            <div class="wptb-icon-box1 wow fadeInLeft">
                                <div class="wptb-item--inner flex-start">
                                    <div class="wptb-item--icon"><img src="{{ asset('questapp/assets/img/country/finland.jpg') }}" alt=""></div>
                                    <div class="wptb-item--holder">
                                        <p class="wptb-item--description">Visa Services</p>
                                        <h5 class="wptb-item--title">Finland</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="wptb-list1">
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Visitor Visa</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Student Visa and Admission</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Work Visa – H1B</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Business Visa</div>
                                </div>
                            </div>

                            <div class="wptb-item--button">
                                <a class="btn--readmore" href="country-details.html">
                                    <span class="btn-readmore--text"> Read More </span> <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="wptb-country-grid">
                            <div class="wptb-icon-box1 wow fadeInLeft">
                                <div class="wptb-item--inner flex-start">
                                    <div class="wptb-item--icon"><img src="{{ asset('questapp/assets/img/country/australia.jpg') }}" alt=""></div>
                                    <div class="wptb-item--holder">
                                        <p class="wptb-item--description">Visa Services</p>
                                        <h5 class="wptb-item--title">Australia</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="wptb-list1">
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Visitor Visa</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Student Visa and Admission</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Work Visa – H1B</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Business Visa</div>
                                </div>
                            </div>

                            <div class="wptb-item--button">
                                <a class="btn--readmore" href="country-details.html">
                                    <span class="btn-readmore--text"> Read More </span> <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="wptb-country-grid">
                            <div class="wptb-icon-box1 wow fadeInLeft">
                                <div class="wptb-item--inner flex-start">
                                    <div class="wptb-item--icon"><img src="{{ asset('questapp/assets/img/country/japan.jpg') }}" alt=""></div>
                                    <div class="wptb-item--holder">
                                        <p class="wptb-item--description">Visa Services</p>
                                        <h5 class="wptb-item--title">Japan</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="wptb-list1">
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Visitor Visa</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Student Visa and Admission</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Work Visa – H1B</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Business Visa</div>
                                </div>
                            </div>

                            <div class="wptb-item--button">
                                <a class="btn--readmore" href="country-details.html">
                                    <span class="btn-readmore--text"> Read More </span> <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="wptb-country-grid">
                            <div class="wptb-icon-box1 wow fadeInLeft">
                                <div class="wptb-item--inner flex-start">
                                    <div class="wptb-item--icon"><img src="{{ asset('questapp/assets/img/country/germany.jpg') }}" alt=""></div>
                                    <div class="wptb-item--holder">
                                        <p class="wptb-item--description">Visa Services</p>
                                        <h5 class="wptb-item--title">Germany</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="wptb-list1">
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Visitor Visa</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Student Visa and Admission</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Work Visa – H1B</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Business Visa</div>
                                </div>
                            </div>

                            <div class="wptb-item--button">
                                <a class="btn--readmore" href="country-details.html">
                                    <span class="btn-readmore--text"> Read More </span> <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="wptb-country-grid">
                            <div class="wptb-icon-box1 wow fadeInLeft">
                                <div class="wptb-item--inner flex-start">
                                    <div class="wptb-item--icon"><img src="{{ asset('questapp/assets/img/country/canada.jpg') }}" alt=""></div>
                                    <div class="wptb-item--holder">
                                        <p class="wptb-item--description">Visa Services</p>
                                        <h5 class="wptb-item--title">Canada</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="wptb-list1">
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Visitor Visa</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Student Visa and Admission</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Work Visa – H1B</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Business Visa</div>
                                </div>
                            </div>

                            <div class="wptb-item--button">
                                <a class="btn--readmore" href="country-details.html">
                                    <span class="btn-readmore--text"> Read More </span> <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="wptb-country-grid">
                            <div class="wptb-icon-box1 wow fadeInLeft">
                                <div class="wptb-item--inner flex-start">
                                    <div class="wptb-item--icon"><img src="{{ asset('questapp/assets/img/country/france.jpg') }}" alt=""></div>
                                    <div class="wptb-item--holder">
                                        <p class="wptb-item--description">Visa Services</p>
                                        <h5 class="wptb-item--title">France</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="wptb-list1">
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Visitor Visa</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Student Visa and Admission</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Work Visa – H1B</div>
                                </div>
                                <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">Business Visa</div>
                                </div>
                            </div>

                            <div class="wptb-item--button">
                                <a class="btn--readmore" href="country-details.html">
                                    <span class="btn-readmore--text"> Read More </span> <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wptb-pagination-wrap text-center">
                <ul class="pagination">
                    <li><a class="disabled page-number previous" href="#"><i class="bi bi-chevron-left"></i></a></li>
                    <li><span class="page-number current">1</span></li>
                    <li><a class="page-number" href="#">2</a></li>
                    <li><a class="page-number" href="#">3</a></li>
                    <li>.....</li>
                    <li><a class="page-number" href="#">9</a></li>
                    <li><a class="page-number next" href="#"><i class="bi bi-chevron-right"></i></a></li>
                </ul>
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
