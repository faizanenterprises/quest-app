@extends('layouts.master')

@section('content')

    {{-- Main Wrapper--}}
<main class="wrapper">
    {{-- Page Header --}}
    <div class="wptb-page-heading" style="background-image: url({{ asset('questapp/assets/img/background/page-header-bg.jpg') }});">
        <div class="container">
            <div class="wptb-item--inner">
                <h2 class="wptb-item--title ">Timeline</h2>
                <div class="wptb-breadcrumb-wrap">
                    <ul class="wptb-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><span>Timeline</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Timeline --}}
    <section class="wptb-timeline-one">
        <div class="container">
            <div class="wptb-heading">
                <div class="wptb-item--inner text-center">
                    <h6 class="wptb-item--subtitle">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M14.9119 2.10726L0.787131 7.08487C0.559931 7.16487 0.509531 7.36087 0.779131 7.46806L3.81593 8.68486L5.61593 9.40566L14.4031 2.95286C14.5215 2.86646 14.6575 3.02886 14.5719 3.12166L8.27513 9.93207V9.93366L7.91353 10.3361L8.39273 10.5937L12.3783 12.7393C12.6111 12.8641 12.9127 12.7609 12.9799 12.4721L15.3047 2.45206C15.3679 2.17766 15.1863 2.01046 14.9119 2.10726ZM5.59993 13.7297C5.59993 13.9265 5.71113 13.9817 5.86473 13.8425C6.06553 13.6593 8.14473 11.7937 8.14473 11.7937L5.59993 10.4785V13.7297Z" fill="#E13833"/>
                            </svg>
                        </span>
                        Our Timeline
                    </h6>
                    <h1 class="wptb-item--title"> <span>Brief Overview of our <br>
                        Amazing journey</span></h1>
                </div>
            </div>

            <div class="wptb-timeline--inner">
                <div class="wptb-timeline">
                    <div class="wptb-timeline-segment">
                        <div class="wptb-item--counter">1</div>

                        <div class="wptb-item--holder">
                            <h3 class="wptb-item--title">Company Introduction</h3>
                            <p class="wptb-item--description">We have additional warehousing outside of our main facility which also We believe in leveraging technology to serve the customers. By combining human ingenuity and technology intelligence</p>
                        </div>

                        <div class="wptb-item--meta">
                            <div class="wptb-item--time">2000-2001</div>
                            <div class="wptb-item--intro">Idea Generation</div>
                        </div>
                    </div>

                    <div class="wptb-timeline-segment">
                        <div class="wptb-item--counter">2</div>

                        <div class="wptb-item--holder">
                            <h3 class="wptb-item--title">Board Of Directors</h3>
                            <p class="wptb-item--description">We have additional warehousing outside of our main facility which also We believe in leveraging technology to serve the customers. By combining human ingenuity and technology intelligence</p>
                        </div>

                        <div class="wptb-item--meta">
                            <div class="wptb-item--time">2002-2003</div>
                            <div class="wptb-item--intro">Idea Generation</div>
                        </div>
                    </div>

                    <div class="wptb-timeline-segment">
                        <div class="wptb-item--counter">3</div>

                        <div class="wptb-item--holder">
                            <h3 class="wptb-item--title">Registration & Certification</h3>
                            <p class="wptb-item--description">We have additional warehousing outside of our main facility which also We believe in leveraging technology to serve the customers. By combining human ingenuity and technology intelligence</p>
                        </div>

                        <div class="wptb-item--meta">
                            <div class="wptb-item--time">2004-2005</div>
                            <div class="wptb-item--intro">Idea Generation</div>
                        </div>
                    </div>

                    <div class="wptb-timeline-segment">
                        <div class="wptb-item--counter">4</div>

                        <div class="wptb-item--holder">
                            <h3 class="wptb-item--title">Run Operation</h3>
                            <p class="wptb-item--description">We have additional warehousing outside of our main facility which also We believe in leveraging technology to serve the customers. By combining human ingenuity and technology intelligence</p>
                        </div>

                        <div class="wptb-item--meta">
                            <div class="wptb-item--time">2006-2007</div>
                            <div class="wptb-item--intro">Idea Generation</div>
                        </div>
                    </div>

                    <div class="wptb-timeline-segment">
                        <div class="wptb-item--counter"><i class="bi bi-chevron-double-down"></i></div>
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
