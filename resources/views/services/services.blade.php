@extends('layouts.master')

@section('content')

{{-- Main Wrapper--}}
<main class="wrapper">
    {{-- Page Header --}}
    <div class="wptb-page-heading" style="background-image: url({{ asset('questapp/assets/img/background/page-header-bg.jpg') }});">
        <div class="container">
            <div class="wptb-item--inner">
                <h2 class="wptb-item--title ">Our Services</h2>
                <div class="wptb-breadcrumb-wrap">
                    <ul class="wptb-breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>

                        <li><span>Our Services</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Our Services --}}
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
                        Our Services
                    </h6>
                    <h1 class="wptb-item--title"> <span>Choose Your Required Services <br>
                        from our list</span></h1>
                </div>
            </div>

            <div class="wptb-service--inner">
                <div class="row">

                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="{{ route('service_express_entry') }}" class="wptb-item-link"><img src="{{ asset('questapp/assets/img/services/canadatourist.jpg') }}" alt="img"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path> </svg>
                                        <img src="{{ asset('questapp/assets/img/services/icon-1.png') }}" alt="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path> </svg>
                                    </div>
                                    <h4 class="wptb-item--title"><a href="{{ route('service_express_entry') }}">Federal Express Entry</a></h4>
                                    <div class="wptb-line-paper"></div>
                                    <p class="wptb-item--description"> The Quest Visitor Visa enables you to visit and explore Canada as a tourist or digital nomad.</p>

                                    <div class="wptb-item--button">
                                        <a class="btn--readmore" href="{{ route('service_express_entry') }}">
                                            <span class="btn-readmore--text"> View More </span> <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="{{ route('service_pnp_program') }}" class="wptb-item-link"><img src="{{ asset('questapp/assets/img/services/canadaimmigration.jpeg') }}" alt="img"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path> </svg>
                                        <img src="{{ asset('questapp/assets/img/services/icon-1.png') }}" alt="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path> </svg>
                                    </div>
                                    <h4 class="wptb-item--title"><a href="{{ route('service_pnp_program') }}">Provincial Nominee Program</a></h4>
                                    <div class="wptb-line-paper"></div>
                                    <p class="wptb-item--description"> Canada’s Provincial Nominee Program (PNP) is a favored option for immigrants possessing the skills, education, and work experience needed to enhance the economy of a particular province or territory.</p>

                                    <div class="wptb-item--button">
                                        <a class="btn--readmore" href="{{ route('service_pnp_program') }}">
                                            <span class="btn-readmore--text"> View More </span> <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="#" class="wptb-item-link"><img src="{{ asset('questapp/assets/img/services/canadaimmigration.jpeg') }}" alt="img"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path> </svg>
                                        <img src="{{ asset('questapp/assets/img/services/icon-3.png') }}" alt="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path> </svg>
                                    </div>
                                    <h4 class="wptb-item--title"><a href="{{ route('service_immigration') }}">Immigrate to Canada</a></h4>
                                    <div class="wptb-line-paper"></div>
                                    <p class="wptb-item--description"> Make Canada your next home for yourself and your family.</p>

                                    <div class="wptb-item--button">
                                        <a class="btn--readmore" href="{{ route('service_immigration') }}">
                                            <span class="btn-readmore--text"> View More </span> <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="#" class="wptb-item-link"><img src="{{ asset('questapp/assets/img/services/canadatourist.jpg') }}" alt="img"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path> </svg>
                                        <img src="{{ asset('questapp/assets/img/services/icon-1.png') }}" alt="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path> </svg>
                                    </div>
                                    <h4 class="wptb-item--title"><a href="{{ route('service_tourist_visa') }}">Tourist Visa Processing</a></h4>
                                    <div class="wptb-line-paper"></div>
                                    <p class="wptb-item--description"> The Quest Visitor Visa enables you to visit and explore Canada as a tourist or digital nomad.</p>

                                    <div class="wptb-item--button">
                                        <a class="btn--readmore" href="{{ route('service_tourist_visa') }}">
                                            <span class="btn-readmore--text"> View More </span> <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-image-box1 active highlight wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="#" class="wptb-item-link"><img src="{{ asset('questapp/assets/img/services/workpermit.webp') }}" alt="img"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path> </svg>
                                        <img src="{{ asset('questapp/assets/img/services/icon-2.png') }}" alt="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path> </svg>
                                    </div>
                                    <h4 class="wptb-item--title"><a href="{{ route('service_work_permit') }}">Canadian Work Permits</a></h4>
                                    <div class="wptb-line-paper"></div>
                                    <p class="wptb-item--description"> Canadian work permit allows you to work and settle in Canada</p>

                                    <div class="wptb-item--button">
                                        <a class="btn--readmore" href="{{ route('service_work_permit') }}">
                                            <span class="btn-readmore--text"> View More </span> <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="{{ route('service_quebec_program') }}" class="wptb-item-link"><img src="{{ asset('questapp/assets/img/services/canadaimmigration.jpeg') }}" alt="img"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path> </svg>
                                        <img src="{{ asset('questapp/assets/img/services/icon-3.png') }}" alt="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path> </svg>
                                    </div>
                                    <h4 class="wptb-item--title"><a href="{{ route('service_quebec_program') }}">Quebec Immigrant Nominee Program</a></h4>
                                    <div class="wptb-line-paper"></div>
                                    <p class="wptb-item--description"> Make Canada your next home for yourself and your family.</p>

                                    <div class="wptb-item--button">
                                        <a class="btn--readmore" href="{{ route('service_quebec_program') }}">
                                            <span class="btn-readmore--text"> View More </span> <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="#" class="wptb-item-link"><img src="{{ asset('questapp/assets/img/services/businessimmigration.jpg') }}" alt="img"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path> </svg>
                                        <img src="{{ asset('questapp/assets/img/services/icon-2.png') }}" alt="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path> </svg>
                                    </div>
                                    <h4 class="wptb-item--title"><a href="{{ route('service_business_visa') }}">Business Immigration</a></h4>
                                    <div class="wptb-line-paper"></div>
                                    <p class="wptb-item--description"> Explore various business options that suite your business profile and budget leading to Permanent residency</p>

                                    <div class="wptb-item--button">
                                        <a class="btn--readmore" href="{{ route('service_business_visa') }}">
                                            <span class="btn-readmore--text"> View More </span> <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="#" class="wptb-item-link"><img src="{{ asset('questapp/assets/img/services/family.jpg') }}" alt="img"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path> </svg>
                                        <img src="{{ asset('questapp/assets/img/services/icon-1.png') }}" alt="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path> </svg>
                                    </div>
                                    <h4 class="wptb-item--title"><a href="{{ route('service_family_visa') }}">Family Sponsorship</a></h4>
                                    <div class="wptb-line-paper"></div>
                                    <p class="wptb-item--description"> Reunite with your loved ones who live outside Canada and sponsor them to Canada</p>

                                    <div class="wptb-item--button">
                                        <a class="btn--readmore" href="{{ route('service_family_visa') }}">
                                            <span class="btn-readmore--text"> View More </span> <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="#" class="wptb-item-link"><img src="{{ asset('questapp/assets/img/services/3.jpg') }}" alt="img"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path> </svg>
                                        <img src="{{ asset('questapp/assets/img/services/icon-3.png') }}" alt="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path> </svg>
                                    </div>
                                    <h4 class="wptb-item--title"><a href="{{ route('service_student_visa') }}">Student Visa Processing</a></h4>
                                    <div class="wptb-line-paper"></div>
                                    <p class="wptb-item--description"> With a strong emphasis on practical lear
                                        ningand hands-on experience, students in
                                        Canadaare provided with valuable...</p>

                                    <div class="wptb-item--button">
                                        <a class="btn--readmore" href="{{ route('service_student_visa') }}">
                                            <span class="btn-readmore--text"> View More </span> <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span>
                                        </a>
                                    </div>
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
