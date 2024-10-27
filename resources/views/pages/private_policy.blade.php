@extends('layouts.master')

@section('content')

    {{-- Main Wrapper--}}
<main class="wrapper">
    {{-- Page Header --}}
    <div class="wptb-page-heading" style="background-image: url({{ asset('questapp/assets/img/background/page-header-bg.jpg') }});">
        <div class="container">
            <div class="wptb-item--inner">
                <h2 class="wptb-item--title ">Private Policy</h2>
                <div class="wptb-breadcrumb-wrap">
                    <ul class="wptb-breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><span>Private Policy</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Contact Us --}}
    <section class="wptb-contact-page-wrapper">
        <div class="container">
            <div class="wptb-contact-infos">
                <div class="row">
                    <h1>Private Policy</h1>
        <p>Effective Date: [Insert Effective Date]</p>

        <h2>1. Introduction</h2>
        <p>Quest Canada Immigration Consultancy Agency ("Quest Canada Immigration," "we," "us," or "our") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website [insert website URL], use our services, or engage with us in other ways.</p>

        <h2>2. Information We Collect</h2>
        <p>We may collect personal information from you when you interact with us, including when you:</p>
        <ul>
            <li>Visit our website</li>
            <li>Submit an inquiry or request for information</li>
            <li>Sign up for our newsletter or updates</li>
            <li>Apply for immigration services</li>
            <li>Participate in surveys or promotions</li>
            <li>Contact us through various channels</li>
        </ul>
        <p>The types of personal information we may collect include:</p>
        <ul>
            <li>Name, address, and contact information (e.g., email address, phone number)</li>
            <li>Date of birth and nationality</li>
            <li>Immigration status and history</li>
            <li>Education and employment information</li>
            <li>Payment information (e.g., credit card details)</li>
            <li>IP address and device information</li>
        </ul>

        <h2>3. How We Use Your Information</h2>
        <p>We may use the information we collect from you to:</p>
        <ul>
            <li>Provide and improve our services</li>
            <li>Process your applications and requests</li>
            <li>Communicate with you, including responding to your inquiries</li>
            <li>Send you newsletters, updates, and promotional materials</li>
            <li>Conduct research and analysis</li>
            <li>Comply with legal obligations</li>
        </ul>

        <h2>4. Information Sharing</h2>
        <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this Privacy Policy or as required by law. We may share your information with:</p>
        <ul>
            <li>Service providers and partners who assist us in operating our business</li>
            <li>Government authorities and agencies as required for immigration purposes</li>
            <li>Legal and regulatory authorities</li>
        </ul>

        <h2>5. Data Security</h2>
        <p>We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, misuse, loss, or alteration. However, no method of transmission over the Internet or electronic storage is completely secure.</p>

        <h2>6. Your Choices</h2>
        <p>You may choose not to provide certain personal information, but this may limit your ability to use our services or website features. You may also unsubscribe from our marketing communications at any time by following the instructions in the communication.</p>

        <h2>7. Updates to This Privacy Policy</h2>
        <p>We may update this Privacy Policy periodically to reflect changes in our practices or legal requirements. We will notify you of any material changes by posting the updated policy on our website or through other appropriate means.</p>

        <h2>8. Contact Us</h2>
        <p>If you have any questions about this Privacy Policy or our privacy practices, please contact us at [insert contact information].</p>
            </div>
        </div>
    </div>

</main>

@endsection
