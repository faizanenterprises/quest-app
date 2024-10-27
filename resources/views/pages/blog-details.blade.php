@extends('layouts.master')

@section('content')

    {{-- Main Wrapper--}}
<main class="wrapper">
    {{-- Page Header --}}
    <div class="wptb-page-heading" style="background-image: url({{ asset('questapp/assets/img/background/page-header-bg.jpg') }});">
        <div class="container">
            <div class="wptb-item--inner">
                <h2 class="wptb-item--title ">Blog Details</h2>
                <div class="wptb-breadcrumb-wrap">
                    <ul class="wptb-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><span>Blog Details</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Details Content --}}
    <section class="blog-details">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-7">
                    <div class="blog-details-inner">
                        <div class="post-content">
                            <figure class="block-gallery mb-0">
                                <ul class="blocks-gallery-grid">
                                    <li class="blocks-gallery-item mb-0 me-0">
                                        <figure>
                                            <a href="#"><img src="{{ asset('questapp/assets/img/blog/lg-1.jpg') }}" alt="img" class="block-image"></a>
                                        </figure>
                                    </li>
                                </ul>
                            </figure>

                            <div class="post-header">
                                <div class="post-date">January 11, 2023</div>
                                <h2 class="post-title">How to be selected in the top ranked university fro all over United Kingdom</h2>
                            </div>
                            <div class="intro">
                                <p> Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly which customers or product groups are working and which ones aren’t you can make the changes needed to get the best results out of your business.</p>
                            </div>

                            <div class="fulltext">
                                <p> Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly which customers or product groups are working and which ones aren’t you can make the changes needed to get the best results out of your business.</p>
                                <p> These are the concepts that shape our distinctive culture & differentiate us from others. They ture the unique spirit of our Firm guide the behaviors that enable us to deliver  the promises we make to our clients and our people.</p>

                                <h4 class="widget-title">quest Values</h4>
                                <p>At Immigration our culture comes to life through three core values:</p>
                                <ul class="point-order">
                                    <li>We seize opportunities to innovate and grow</li>
                                    <li>We are one firm with a shared sense of purpose</li>
                                    <li>We care about each other and the world around us</li>
                                </ul>
                                <figure class="block-gallery">
                                    <ul class="blocks-gallery-grid">
                                        <li class="blocks-gallery-item">
                                            <figure>
                                                <a href="#"><img src="{{ asset('questapp/assets/img/blog/15.jpg') }}" alt="img" class="block-image"></a>
                                            </figure>
                                        </li>
                                        <li class="blocks-gallery-item">
                                            <figure>
                                                <a href="#"><img src="{{ asset('questapp/assets/img/blog/16.jpg') }}" alt="img" class="block-image"></a>
                                            </figure>
                                        </li>
                                    </ul>
                                </figure>


                                <p>We guide our clients through difficult issues, bringing our insight and judgment to each situa- tion. Our innovative approaches create original solutions to our clients' most complex domestic & multi jurisdic tional deals and disputes.</p>

                                <p>By thinking on behalf of our clients every day, we anticipate what they want, provide what they need & build lasting relationships. These are the concept that shape our distinctive culture and differentiate us from others.</p>
                                <div class="video-post">
                                    <div class="ytube-video">
                                        <iframe id="ytvideo" src="https://www.youtube.com/embed/fEErySYqItI" allow="autoplay;" allowfullscreen></iframe>
                                        <div class="post-content">
                                            <div class="ytplay-btn"><i class="bi bi-play"></i></div>
                                            <img src="{{ asset('questapp/assets/img/blog/lg-2.jpg') }}" alt="img">
                                        </div>
                                    </div>
                                </div>

                                <p>By thinking on behalf of our clients every daywe anticipate what they want provide what they need & build lasting relationships.These are the concepts that shape our distinctive culture & differentiate us from others.</p>

                                <p>Our clients every day wanticipate what they want, provide what they need & build relationships. These are the concepts that shape our distinctive culture & differentiate us from others.</p>

                                <div class="post-footer">
                                    <div class="post-share">
                                        <ul class="share-list">
                                            <li>Share:</li>
                                            <li class="facebook"><a href="#">Facebook</a></li>
                                            <li class="twitter"><a href="#">Twitter</a></li>
                                            <li class="pinterest"><a href="#">Pinterest</a></li>
                                            <li class="instagram"><a href="#">Instagram</a></li>
                                            <li class="linkedin"><a href="#">Linkedin</a></li>
                                        </ul>
                                    </div>
                                </div>

                                {{-- Author Section  --}}
                                <div class="author-div">
                                    <div class="author">
                                        <img alt="img" src="{{ asset('questapp/assets/img/blog/author-1.jpg') }}" class="avatar">
                                    </div>
                                    <div class="author-block">
                                        <h5 class="author-name">Rayan Kellar</h5>
                                        <p class="author-intro">By thinking on behalf of our clients every daywe anticipate what they
                                            want provide what they need & build lasting relationships.</p>
                                        <div class="social-media">
                                            <ul class="social-list">
                                                <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                                <li><a href="#"><i class="bi bi-twitter-x"></i></a></li>
                                                <li><a href="#"><i class="bi bi-dribbble"></i></a></li>
                                                <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Comment List --}}
                                <div class="comments-area">
                                    <h3 class="comments-title">Comments</h3>
                                    <ul class="comment-list">
                                        <li class="comment even thread-even depth-1">
                                            <div class="commenter-block">
                                                <div class="comment-avatar">
                                                    <img alt="img" src="{{ asset('questapp/assets/img/blog/commenter-1.jpg') }}" class="avatar">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-author-name">Mellisa Doe <span class="comment-date">January 29, 2023</span></div>
                                                    <div class="comment-author-comment">
                                                        <p>Lorem ipsum dolor sit amet, consectetur. Ut enim ad minima veniam quis nostrum exercitationem mosequatu autem.</p>
                                                        <span class="comment-reply"><a href="#" class="comment-reply-link">Reply</a></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <ul class="children">
                                                <li class="comment even thread-even depth-2">
                                                    <div class="commenter-block">
                                                        <div class="comment-avatar">
                                                            <img alt="img" src="{{ asset('questapp/assets/img/blog/commenter-2.jpg') }}" class="avatar">
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="comment-author-name">Rayan Kellar <span class="comment-date">January 22, 2023</span></div>
                                                            <div class="comment-author-comment">
                                                                <p>Lorem ipsum dolor sit amet, consectetur. Ut enim ad minima veniam quis nostrum exercitationem mosequatu autem.</p>
                                                                <span class="comment-reply"><a href="#" class="comment-reply-link">Reply</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>{{-- #comment-## --}}
                                            </ul>{{-- .children --}}
                                        </li>{{-- #comment-## --}}
                                        <li class="comment odd thread-odd depth-1">
                                            <div class="commenter-block">
                                                <div class="comment-avatar">
                                                    <img alt="img" src="{{ asset('questapp/assets/img/blog/commenter-1.jpg') }}" class="avatar">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-author-name">Mellisa Doe <span class="comment-date">January 01, 2023</span></div>
                                                    <div class="comment-author-comment">
                                                        <p>Lorem ipsum dolor sit amet, consectetur. Ut enim ad minima veniam quis nostrum exercitationem mosequatu autem.</p>
                                                        <span class="comment-reply"><a href="#" class="comment-reply-link">Reply</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>{{-- #comment-## --}}
                                    </ul>
                                    <div class="comments-pagination">
                                        <a class="page-numbers" href="#">1</a>
                                        <span aria-current="page" class="page-numbers current">2</span>
                                    </div>
                                </div>

                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">Make A Comment <span class="title-line"></span></h3>
                                    <form class="comment-form" action="https://wpthemebooster.com/demo/themeforest/html/quest/register.php" method="post">
                                        <p class="logged-in-as">Your email address will not be published. Required fields are marked *</p>
                                        <div class="form-container">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" placeholder="Name*" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <textarea name="message" class="form-control" placeholder="Text Here*" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="wptb-item--button">
                                                        <input class="btn" type="submit" value="Make Comment" name="submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Sidebar  --}}
                <div class="col-lg-4 col-md-5 mt-5 mt-md-0 ps-md-5">

                    <div class="sidebar">

                        <div class="widget widget_block widget_search">
                            <form method="get" class="wp-block-search">
                                <div class="wp-block-search__inside-wrapper ">
                                    <input type="search" class="wp-block-search__input" name="search" value="" placeholder="Search" required="">
                                    <button type="submit" class="wp-block-search__button"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div>
                        {{-- end widget --}}

                        <div class="widget widget_block widget_custom">
                            <h2 class="widget-title">About Author</h2>
                            <div class="sidebar_author">
                                <img src="{{ asset('questapp/assets/img/blog/author-2.jpg') }}" alt="img">
                                <p class="intro">Sed ut perspiciatis unde omnis iste natus err or sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt</p>
                                <div class="author_social">
                                    <ul>
                                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                        <li><a href="#"><i class="bi bi-twitter-x"></i></a></li>
                                        <li><a href="#"><i class="bi bi-pinterest"></i></a></li>
                                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                        <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- end widget --}}

                        <div class="widget widget_block">
                            <div class="wp-block-group__inner-container">
                                <h2 class="widget-title">Recent Posts</h2>
                                <ul class="wp-block-latest-posts__list wp-block-latest-posts">
                                    <li>
                                        <div class="latest-posts-image">
                                            <img src="{{ asset('questapp/assets/img/blog/8.jpg') }}" alt="img">
                                        </div>
                                        <div class="latest-posts-content">
                                            <h5><a href="blog-details.html">How consultation in business is affecting new ventures</a></h5>
                                            <h6>January 11, 2023</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="latest-posts-image">
                                            <img src="{{ asset('questapp/assets/img/blog/9.jpg') }}" alt="img">
                                        </div>
                                        <div class="latest-posts-content">
                                            <h5><a href="blog-details.html">Challenges of consultation new Business Firms</a></h5>
                                            <h6>January 01, 2023</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="latest-posts-image">
                                            <img src="{{ asset('questapp/assets/img/blog/10.jpg') }}" alt="img">
                                        </div>
                                        <div class="latest-posts-content">
                                            <h5><a href="blog-details.html">Changes in recent consultancy styles now a days</a></h5>
                                            <h6>January 21, 2023</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- end widget --}}

                        <div class="widget widget_block">
                            <div class="wp-block-group__inner-container">
                                <h2 class="widget-title">Categories</h2>
                                <ul class="wp-block-categories-list wp-block-categories">
                                    <li class="cat-item"><a href="#">Consultaion</a> (10)</li>
                                    <li class="cat-item"><a href="#">Business</a> (12)</li>
                                    <li class="cat-item"><a href="#">Marketing</a> (08)</li>
                                    <li class="cat-item"><a href="#">Finance</a> (15)</li>
                                    <li class="cat-item"><a href="#">Campaign</a> (21)</li>
                                </ul>
                            </div>
                        </div>
                        {{-- end widget --}}

                        <div class="widget widget_block widget_tag_cloud">
                            <div class="wp-block-group__inner-container">
                                <h2 class="widget-title">Tag Cloud</h2>
                                <ul class="wp-block-tag-list wp-block-tag">
                                    <p class="wp-block-tag-cloud">
                                        <a href="#" class="tag-cloud-link">Business</a>
                                        <a href="#" class="tag-cloud-link">Finance</a>
                                        <a href="#" class="tag-cloud-link">Marketing</a>
                                        <a href="#" class="tag-cloud-link">Consultancy</a>
                                        <a href="#" class="tag-cloud-link">Process</a>
                                        <a href="#" class="tag-cloud-link">Meeting</a>
                                        <a href="#" class="tag-cloud-link">Campaign</a>
                                    </p>
                                </ul>
                            </div>
                        </div>
                        {{-- end widget --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- End Details Content --}}

</main>

@endsection
