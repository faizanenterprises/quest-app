{{-- FAQ's --}}
<section id="faq" class="wptb-faq-one pd-top-more">
    <div class="container">
        {{-- FAQ's --}}
        <div class="wptb-faq--inner">
            <div class="wptb-heading">
                <div class="row">
                    <div class="col-md-6">
                        <div class="wptb-item--inner">
                            <h6 class="wptb-item--subtitle">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <path
                                            d="M14.9119 2.10726L0.787131 7.08487C0.559931 7.16487 0.509531 7.36087 0.779131 7.46806L3.81593 8.68486L5.61593 9.40566L14.4031 2.95286C14.5215 2.86646 14.6575 3.02886 14.5719 3.12166L8.27513 9.93207V9.93366L7.91353 10.3361L8.39273 10.5937L12.3783 12.7393C12.6111 12.8641 12.9127 12.7609 12.9799 12.4721L15.3047 2.45206C15.3679 2.17766 15.1863 2.01046 14.9119 2.10726ZM5.59993 13.7297C5.59993 13.9265 5.71113 13.9817 5.86473 13.8425C6.06553 13.6593 8.14473 11.7937 8.14473 11.7937L5.59993 10.4785V13.7297Z"
                                            fill="#E13833" />
                                    </svg>
                                </span>
                                FREQUENTLY ASKED QUESTIONS
                            </h6>
                            <h1 class="wptb-item--title"> <span>Questions & Answer</span></h1>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <p class="wptb-item--description">QUEST RECRUITMENT was created to provide uniquely designed
                            premium services in the world of education and migration.
                            As people are dreaming more.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="wptb-accordion wptb-accordion1 wow fadeInUp">
                        <div class="wptb--item active">
                            <h6 class="wptb-item-title"><span>Q1. Which is the prerequisites for immigration?</span> <i
                                    class="bi bi-chevron-down"></i></h6>
                            <div class="wptb-item--content">
                                Our business consulting programs helps to break the performance of your business down
                                into customers and product groups so you know exactly which customers or product groups
                                are working.
                            </div>
                        </div>

                        <div class="wptb--item">
                            <h6 class="wptb-item-title"><span>Q2. What are the contact address of quest?</span> <i
                                    class="bi bi-chevron-down"></i></h6>
                            <div class="wptb-item--content">
                                Our business consulting programs helps to break the performance of your business down
                                into customers and product groups so you know exactly which customers or product groups
                                are working.
                            </div>
                        </div>

                        <div class="wptb--item">
                            <h6 class="wptb-item-title"><span>Q3. What IELTS Score required for Canada?</span> <i
                                    class="bi bi-chevron-down"></i></h6>
                            <div class="wptb-item--content">
                                Our business consulting programs helps to break the performance of your business down
                                into customers and product groups so you know exactly which customers or product groups
                                are working.
                            </div>
                        </div>

                        <div class="wptb--item">
                            <h6 class="wptb-item-title"><span>Q4. How much time needed for visa renewal?</span> <i
                                    class="bi bi-chevron-down"></i></h6>
                            <div class="wptb-item--content">
                                Our business consulting programs helps to break the performance of your business down
                                into customers and product groups so you know exactly which customers or product groups
                                are working.
                            </div>
                        </div>

                        <div class="wptb-item--button">
                            <a class="btn--readmore" href="{{ route('faq') }}">
                                <span class="btn-readmore--text"> View More Faq’s <i
                                        class="bi bi-chevron-double-right"></i> </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div id="appointment" class="col-md-5 offset-md-1">
                    <div class="wptb-appointment-form-one">
                        <div class="wptb-form--wrapper">
                            <form class="wptb-form" action="{{ route('make_appointment') }}" method="post">
                                @csrf
                                <div class="wptb-form--inner">
                                    <div class="wptb-heading">
                                        <div class="wptb-item--inner text-center">
                                            <h2 class="wptb-item--title"> <span>Book An Appointment</span></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <select name="gender" class="form-control">
                                                    <option value="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <select name="service" class="form-control">
                                                    <option value="">Select Service</option>
                                                    <option value="Tourist Visa Processing">Tourist Visa Processing
                                                    </option>
                                                    <option value="Canadian Work Permits">Canadian Work Permits</option>
                                                    <option value="Immigrate to Canada">Immigrate to Canada</option>
                                                    <option value="Business Immigration">Business Immigration</option>
                                                    <option value="Student Visa Processing">Student Visa Processing
                                                    </option>
                                                    <option value="Family Sponsorship">Family Sponsorship</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Your Full Name*" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <input type="number" name="phone" class="form-control"
                                                    placeholder="Phone No">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <input type="date" name="date" class="form-control"
                                                    placeholder="Select Date" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <input type="time" name="time" class="form-control"
                                                    placeholder="Select Time">
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-12">
                                            <div class="wptb-item--button text-center">
                                                <input class="btn" type="submit" value="Make Appointment"
                                                    name="submit">
                                            </div>
                                        </div>
                                        <div >
                                            @if (session('sentmessage'))
                                                <br><br>
                                                <div id="appointmentmessage" class="alert alert-success">

                                                    {{ session('sentmessage') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </form>


                            <div class="wptb-form--bottom">
                                <div class="wptb-heading">
                                    <div class="wptb-item--inner">
                                        <h6 class="wptb-item--subtitle">Or just Give us a call</h6>
                                        <h1 class="wptb-item--title"> <span>+1 (306) 351-1900 </span></h1>
                                        <p class="wptb-item--description"> <span>The Support Centre is abailable
                                                24/7</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
