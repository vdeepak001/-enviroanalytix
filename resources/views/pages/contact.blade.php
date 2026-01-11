@extends('layouts.app-modern')

@section('title', 'Contact Us - EnviroAnalytix')

@section('content')
<!-- Page Banner -->
@include('components.hero', [
    'title' => 'Contact Us',
    'breadcrumbs' => [
        ['title' => 'Contact Us', 'url' => route('contact')]
    ]
])

<!-- Contact Section -->
<section class="space contact-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center wow fadeInUp">
                <h2>How to Contact Us</h2>
                <p class="lead">We'd love to hear from you. Get in touch with our team for any inquiries or project discussions.</p>
            </div>
        </div>

        <div class="row mt-5">
            <!-- Contact Form -->
            <div class="col-lg-8 wow fadeInLeft">
                <div class="contact-form-wrapper">
                    <h3>Contact Us Directly</h3>
                    <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="name">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="email">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="subject">Subject <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="subject" name="subject" required placeholder="Enter subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="message">Message <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="message" name="message" rows="6" required placeholder="Enter your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fa fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Info Sidebar -->
            <div class="col-lg-4 wow fadeInRight">
                <div class="contact-info-sidebar">
                    <h4>Our Global Offices</h4>
                    
                    <div class="office-info mb-4">
                        <h6><i class="fa fa-map-marker"></i> Canada</h6>
                        <p>8 The Green Ste A<br>Dover, DE 19901, USA</p>
                        <p><i class="fa fa-phone"></i> +1 (302) 555-0123</p>
                        <p><i class="fa fa-envelope"></i> canada@enviroanalytix.com</p>
                    </div>

                    <div class="office-info mb-4">
                        <h6><i class="fa fa-map-marker"></i> Australia</h6>
                        <p>Level 1, 350 Collins Street<br>Melbourne VIC 3000</p>
                        <p><i class="fa fa-phone"></i> +61 3 9000 0000</p>
                        <p><i class="fa fa-envelope"></i> australia@enviroanalytix.com</p>
                    </div>

                    <div class="office-info mb-4">
                        <h6><i class="fa fa-map-marker"></i> USA</h6>
                        <p>1234 Business Ave<br>New York, NY 10001</p>
                        <p><i class="fa fa-phone"></i> +1 (212) 555-0100</p>
                        <p><i class="fa fa-envelope"></i> usa@enviroanalytix.com</p>
                    </div>

                    <div class="office-info mb-4">
                        <h6><i class="fa fa-map-marker"></i> India</h6>
                        <p>Tech Park, Sector 62<br>Noida, UP 201301</p>
                        <p><i class="fa fa-phone"></i> +91 120 555 0000</p>
                        <p><i class="fa fa-envelope"></i> india@enviroanalytix.com</p>
                    </div>

                    <div class="social-links-contact mt-4">
                        <h6>Connect With Us</h6>
                        <a href="https://www.linkedin.com/company/pmsglobal" target="_blank" class="social-btn">
                            <i class="fa fa-linkedin"></i> LinkedIn
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="row mt-5">
            <div class="col-lg-12 wow fadeInUp">
                <h3 class="text-center mb-4">Find Us on Map</h3>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968459391!3d40.74844097932847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1589990812345!5m2!1sen!2sus" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="space green-strip">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 text-center">
                <h2 class="text-white wow fadeInUp">Want to hire us?</h2>
                <p class="text-white wow fadeInUp" data-wow-delay="0.2s">Let's discuss how we can help bring your project to life</p>
                <a href="mailto:info@enviroanalytix.com" class="btn btn-light btn-lg wow fadeInUp" data-wow-delay="0.4s">
                    <i class="fa fa-envelope"></i> Email Us Now
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
