{{-- Footer --}}
<footer class="footer style1" style="background-image: url({{ asset('questapp/assets/img/background/bg-1.jpg') }});">
    <div class="footer-top">
        <div class="container">
            <div class="footer-upper-contact">
                <div class="row">
                    {{-- Left Box --}}
                    <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
                        <div class="logo">
                            <a href="{{ route('index') }}" class="light_logo"><img src="{{ asset('questapp/assets/img/questlogo.jpg') }}" alt="logo"></a>
                        </div>
                    </div>

                    {{-- Right Box --}}
                    <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="bi bi-buildings"></i></div>
                                <div class="wptb-item--holder">
                                    <p class="wptb-item--description">1757 Halifax Street, <br> Regina, SK S4P 1T2</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="bi bi-telephone-fill"></i></div>
                                <div class="wptb-item--holder">
                                    <p class="wptb-item--description">+1 (306) 351-1900</p>
                                    <p class="wptb-item--description">+1 (306) 351-1900</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
                        <div class="social-box">
                            <ul>
                                <li><a href="https://www.facebook.com/" class="bi bi-facebook"></a></li>
                                <li><a href="https://www.instagram.com/" class="bi bi-instagram"></a></li>
                                <li><a href="https://www.linkedin.com/" class="bi bi-linkedin"></a></li>
                                <li><a href="https://www.behance.com/" class="bi bi-behance"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-5 mb-5 mb-xl-0">
                    <h3 class="text-two"> We are shaping your dream future</h3>
                    <p class="text-two">We are shaping your dream future by guiding you through every step of the Canada immigration process.</p>


                    <h6 class="widget-title lg">OUR VISA IMMIGRATION SERVICES</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-nav">
                                <ul>
                                    <li class="menu-item"><a href="{{ route('service_tourist_visa') }}"><i class="bi bi-arrow-right"></i> Tourist Visa Processing</a></li>
                                    <li class="menu-item"><a href="{{ route('service_family_visa') }}"><i class="bi bi-arrow-right"></i> Family Visa Processing</a></li>
                                    <li class="menu-item"><a href="{{ route('service_student_visa') }}"><i class="bi bi-arrow-right"></i> Student Visa Processing</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-nav">
                                <ul>
                                    <li class="menu-item"><a href="{{ route('service_immigration') }}"><i class="bi bi-arrow-right"></i> Immigration Consultancy</a></li>
                                    <li class="menu-item"><a href="{{ route('service_business_visa') }}"><i class="bi bi-arrow-right"></i> Business Visa Processing</a></li>
                                    <li class="menu-item"><a href="{{ route('service_work_permit') }}"><i class="bi bi-arrow-right"></i> Work Permit Visa Processing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}" class="btn mt-4">
                        <span class="btn-wrap">
                            <span class="text-first">Contact Us</span>
                            <span class="text-second">Contact Us</span>
                        </span>
                    </a>
                </div>

                <div class="col-xl-7">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 mb-5 mb-md-0">
                            <div class="footer-widget footer-links">
                                <h5 class="widget-title">Useful Links</h5>
                                <div class="footer-nav">
                                    <ul>
                                        <li class="menu-item"><a href="{{ route('aboutus') }}"><i class="bi bi-circle-fill"></i> About Company</a></li>
                                        <li class="menu-item"><a href="{{ route('index') }}"><i class="bi bi-circle-fill"></i> Our Experience</a></li>

                                        <li class="menu-item"><a href="{{ route('service_quebec_program') }}"><i class="bi bi-circle-fill"></i> Qubec Program</a></li>

                                        <li class="menu-item"><a href="{{ route('index') }}#appointment"><i class="bi bi-circle-fill"></i> Get Appointment</a></li>
                                        <li class="menu-item"><a href="{{ route('bloglist') }}"><i class="bi bi-circle-fill"></i> Blogs</a></li>
                                        <li class="menu-item"><a href="{{ route('contact') }}"><i class="bi bi-circle-fill"></i> Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-5 mb-md-0">
                            <div class="footer-widget footer-links">
                                <h5 class="widget-title">Useful Links</h5>
                                <div class="footer-nav">
                                    <ul>
                                        <li class="menu-item"><a href="{{ route('index') }}#whychoose"><i class="bi bi-circle-fill"></i> Wy Choose Us</a></li>
                                        <li class="menu-item"><a href="{{ route('index') }}#features"><i class="bi bi-circle-fill"></i> Our Features</a></li>
                                        <li class="menu-item"><a href="{{ route('services') }}"><i class="bi bi-circle-fill"></i> Our Services</a></li>
                                        <li class="menu-item"><a href="{{ route('index') }}#about"><i class="bi bi-circle-fill"></i> About Our Company</a></li>

                                        <li class="menu-item"><a href="{{ route('faq') }}"><i class="bi bi-circle-fill"></i> Frequently Asked Questions</a></li>
                                        <li class="menu-item"><a href="{{ route('bloglist') }}"><i class="bi bi-circle-fill"></i> Blogs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-5 mb-md-0">
                            <div class="footer-widget footer-links">
                                <h5 class="widget-title">Blogs</h5>
                                <div class="footer-nav">
                                    <ul>
                                        <li class="menu-item"><a href="{{ route('bloglist') }}"><i class="bi bi-circle-fill"></i> Blogs</a></li>
                                        <li class="menu-item"><a href="{{ route('blog_studyabroad') }}"><i class="bi bi-circle-fill"></i> Study Abroad</a></li>
                                        <li class="menu-item"><a href="{{ route('blog_top_universities') }}"><i class="bi bi-circle-fill"></i> Top Universities</a></li>
                                        <li class="menu-item"><a href="{{ route('blog_second_attempt') }}"><i class="bi bi-circle-fill"></i> Visa Reject</a></li>
                                        <li class="menu-item"><a href="{{ route('blog_doc_spouse') }}"><i class="bi bi-circle-fill"></i> Wife Sponsorship </a></li>

                                        <li class="menu-item"><a href="{{ route('private_policy') }}"><i class="bi bi-circle-fill"></i> Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer Bottom Part --}}
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <div class="copyright">
                    <p>&copy;Copyright 2024 <a href="https://themeforest.net/user/wpthemebooster">quest</a>. All rights reserved</p>
                </div>
                <div class="footer-nav-bottom">
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Term of Use</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="totop">
    <a href="#"><i class="bi bi-chevron-up"></i></a>
</div>


{{-- Core JS --}}
<script src="{{ asset('questapp/assets/js/jquery-3.6.0.min.js') }}"></script>

{{-- Framework --}}
<script src="{{ asset('questapp/assets/js/bootstrap.min.js') }}"></script>

{{-- WOW Scroll Effect --}}
<script src="{{ asset('questapp/plugins/wow/wow.min.js') }}"></script>

{{-- Swiper Slider --}}
<script src="{{ asset('questapp/plugins/swiper/swiper-bundle.min.js') }}"></script>

{{-- Odometer Counter --}}
<script src="{{ asset('questapp/plugins/odometer/appear.js') }}"></script>
<script src="{{ asset('questapp/plugins/odometer/odometer.js') }}"></script>

{{-- Fancybox --}}
<script src="{{ asset('questapp/plugins/fancybox/jquery.fancybox.min.js') }}"></script>

{{-- Full Calendar --}}
<script src="{{ asset('questapp/plugins/fullcalendar/fullcalendar.js') }}"></script>
<script src="{{ asset('questapp/plugins/fullcalendar/fullcalendar-init.js') }}"></script>
<script src="{{ asset('questapp/plugins/fullcalendar/moment.js') }}"></script>

{{-- Flatpickr --}}
<script src="{{ asset('questapp/plugins/flatpickr/flatpickr.min.js') }}"></script>

{{-- Nice Select --}}
<script src="{{ asset('questapp/plugins/nice-select/jquery.nice-select.min.js') }}"></script>

{{-- Portfolio --}}
<script src="{{ asset('questapp/plugins/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('questapp/plugins/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('questapp/plugins/isotope/jquery.hoverdir.js') }}"></script>
<script src="{{ asset('questapp/plugins/isotope/modernizr-custom.js') }}"></script>
<script src="{{ asset('questapp/plugins/isotope/isotope-init.js') }}"></script>

{{-- Theme Custom JS --}}
<script src="{{ asset('questapp/assets/js/theme.js') }}"></script>

{{-- Bootstrap JS and dependencies --}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

{{-- Modal script --}}
<script>
$(document).ready(function(){
    @if (session('messages'))
        $('#messageModal').modal('show');
    @endif
});
</script>

<script>
    window.addEventListener('load', function() {
        var element = document.getElementById('appointmentmessage');
        if (element) {
            element.scrollIntoView({ behavior: 'smooth' });
        }
    });
</script>

<script>
    window.addEventListener('load', function() {
        var element = document.getElementById('contactmessage');
        if (element) {
            element.scrollIntoView({ behavior: 'smooth' });
        }
    });
</script>

<script>
    window.addEventListener('load', function() {
        var element = document.getElementById('faqmessage');
        if (element) {
            element.scrollIntoView({ behavior: 'smooth' });
        }
    });
</script>

</body>

{{-- Mirrored from wpthemebooster.com/demo/themeforest/html/quest/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Apr 2024 14:57:25 GMT --}}
</html>
