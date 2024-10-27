@extends('layouts.master')

@section('content')

    {{-- Main Wrapper--}}
<main class="wrapper">
    {{-- Page Header --}}
    <div class="wptb-page-heading" style="background-image: url({{ asset('questapp/assets/img/background/page-header-bg.jpg') }});">
        <div class="container">
            <div class="wptb-item--inner">
                <h2 class="wptb-item--title ">Price List</h2>
                <div class="wptb-breadcrumb-wrap">
                    <ul class="wptb-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><span>Price List</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Price List --}}
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
                        Pricing Packages
                    </h6>
                    <h1 class="wptb-item--title"> <span>Get the best packages For every <br>
                        Exam preparation</span></h1>
                </div>
            </div>

            <div class="wptb-price-list--inner">
                <div class="wptb-packages1 active highlight wow fadeInLeft">
                    <div class="wptb-item--inner">
                        <div class="wptb-item--left-part">
                            <div class="wptb-item--holder">
                                <h6 class="wptb-item--category"><a href="#">IELTS</a></h6>
                                <h4 class="wptb-item--title"><a href="#">IELTS Exam Preparation</a></h4>
                                <p class="wptb-item--description"> QUEST RECRUITMENT takes great
                                    pride in its commitment for helping interna
                                    tional students from all over...</p>
                            </div>

                            <div class="wptb-item--image">
                                <a href="#" class="wptb-item-link"><img src="{{ asset('questapp/assets/img/packages/1.jpg') }}" alt="img"></a>
                            </div>
                        </div>

                        <div class="wptb-item--right-part">
                            <div class="wptb-list1">
                                <div class="wptb--item wow skewIn animated">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">IELTS Exam Preparation Manual</div>
                                </div>
                                <div class="wptb--item wow skewIn animated">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">IELTS Exam Preparation Mock Test</div>
                                </div>
                                <div class="wptb--item wow skewIn animated">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">IELTS Preparation Consultation</div>
                                </div>
                                <div class="wptb--item wow skewIn animated">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">IELTS Exam Venue & Arrangement</div>
                                </div>
                            </div>

                            <div class="wptb-item--price">
                                <span class="wptb-service-price">$645.00</span> <span class="wptb-service-price-for">Per Attempt</span>
                                <div class="wptb-item--button">
                                    <a class="btn--readmore" href="contact-1.html">
                                        <span class="btn-readmore--text"> Get Started </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wptb-packages1 wow fadeInLeft">
                    <div class="wptb-item--inner">
                        <div class="wptb-item--left-part">
                            <div class="wptb-item--holder">
                                <h6 class="wptb-item--category"><a href="#">TOEFL</a></h6>
                                <h4 class="wptb-item--title"><a href="#">TOEFL Exam Preparation</a></h4>
                                <p class="wptb-item--description"> QUEST RECRUITMENT takes great
                                    pride in its commitment for helping interna
                                    tional students from all over...</p>
                            </div>

                            <div class="wptb-item--image">
                                <a href="#" class="wptb-item-link"><img src="{{ asset('questapp/assets/img/packages/2.jpg') }}" alt="img"></a>
                            </div>
                        </div>

                        <div class="wptb-item--right-part">
                            <div class="wptb-list1">
                                <div class="wptb--item wow skewIn animated">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">IELTS Exam Preparation Manual</div>
                                </div>
                                <div class="wptb--item wow skewIn animated">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">IELTS Exam Preparation Mock Test</div>
                                </div>
                                <div class="wptb--item wow skewIn animated">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">IELTS Preparation Consultation</div>
                                </div>
                                <div class="wptb--item wow skewIn animated">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">IELTS Exam Venue & Arrangement</div>
                                </div>
                            </div>

                            <div class="wptb-item--price">
                                <span class="wptb-service-price">$645.00</span> <span class="wptb-service-price-for">Per Attempt</span>
                                <div class="wptb-item--button">
                                    <a class="btn--readmore" href="contact-1.html">
                                        <span class="btn-readmore--text"> Get Started </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wptb-packages1 wow fadeInLeft">
                    <div class="wptb-item--inner">
                        <div class="wptb-item--left-part">
                            <div class="wptb-item--holder">
                                <h6 class="wptb-item--category"><a href="#">PTE</a></h6>
                                <h4 class="wptb-item--title"><a href="#">PTE Exam Preparation</a></h4>
                                <p class="wptb-item--description"> QUEST RECRUITMENT takes great
                                    pride in its commitment for helping interna
                                    tional students from all over...</p>
                            </div>

                            <div class="wptb-item--image">
                                <a href="#" class="wptb-item-link"><img src="{{ asset('questapp/assets/img/packages/3.jpg') }}" alt="img"></a>
                            </div>
                        </div>

                        <div class="wptb-item--right-part">
                            <div class="wptb-list1">
                                <div class="wptb--item wow skewIn animated">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">IELTS Exam Preparation Manual</div>
                                </div>
                                <div class="wptb--item wow skewIn animated">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">IELTS Exam Preparation Mock Test</div>
                                </div>
                                <div class="wptb--item wow skewIn animated">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">IELTS Preparation Consultation</div>
                                </div>
                                <div class="wptb--item wow skewIn animated">
                                    <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                                    <div class="wptb-item--text">IELTS Exam Venue & Arrangement</div>
                                </div>
                            </div>

                            <div class="wptb-item--price">
                                <span class="wptb-service-price">$645.00</span> <span class="wptb-service-price-for">Per Attempt</span>
                                <div class="wptb-item--button">
                                    <a class="btn--readmore" href="contact-1.html">
                                        <span class="btn-readmore--text"> Get Started </span>
                                    </a>
                                </div>
                            </div>
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
