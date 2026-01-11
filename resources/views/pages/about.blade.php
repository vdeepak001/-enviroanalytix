@extends('layouts.app-modern')

@section('title', 'About Us - EnviroAnalytix')

@section('content')
<!-- Page Banner -->
@include('components.hero', [
    'title' => 'About Us',
    'breadcrumbs' => [
        ['title' => 'About Us', 'url' => route('about')]
    ]
])

<!-- About Content Section -->
<section class="space about-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-intro wow fadeInUp">
                    <h2>Engineering Excellence, Innovating the Future</h2>
                    <h4>Your Global Partner in Smart & Sustainable AEC Solutions</h4>
                    <p class="lead">With over 10 years of experience in the Architecture, Engineering, and Construction (AEC) industry, EnviroAnalytix has established itself as a trusted partner for delivering innovative and sustainable solutions worldwide.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft">
                <img src="{{ asset('images/about-mission.jpg') }}" alt="Our Mission" class="img-fluid rounded shadow-lg">
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="content-box">
                    <h3><i class="fa fa-bullseye"></i> Our Mission</h3>
                    <p>To deliver world-class engineering and architectural solutions that exceed client expectations while promoting sustainability and innovation. We are committed to leveraging cutting-edge technology and industry best practices to create value for our clients and stakeholders.</p>
                    <ul class="feature-list">
                        <li><i class="fa fa-check-circle"></i> Client-Centric Approach</li>
                        <li><i class="fa fa-check-circle"></i> Innovation & Technology</li>
                        <li><i class="fa fa-check-circle"></i> Sustainable Development</li>
                        <li><i class="fa fa-check-circle"></i> Quality Excellence</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mt-5 align-items-center">
            <div class="col-lg-6 order-lg-2 wow fadeInRight">
                <img src="{{ asset('images/about-vision.jpg') }}" alt="Our Vision" class="img-fluid rounded shadow-lg">
            </div>
            <div class="col-lg-6 order-lg-1 wow fadeInLeft">
                <div class="content-box">
                    <h3><i class="fa fa-eye"></i> Our Vision</h3>
                    <p>To be the global leader in providing integrated AEC solutions, recognized for our commitment to excellence, innovation, and sustainability. We envision a future where our engineering solutions contribute to building a smarter, more sustainable world.</p>
                    <ul class="feature-list">
                        <li><i class="fa fa-check-circle"></i> Global Leadership</li>
                        <li><i class="fa fa-check-circle"></i> Technological Advancement</li>
                        <li><i class="fa fa-check-circle"></i> Environmental Responsibility</li>
                        <li><i class="fa fa-check-circle"></i> Continuous Improvement</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 wow fadeInUp">
                <div class="advantage-section">
                    <h3 class="text-center mb-4"><i class="fa fa-trophy"></i> PMS Advantage</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="advantage-box text-center">
                                <div class="number">01</div>
                                <h5>Global Expertise</h5>
                                <p>Offices in Canada, Australia, USA, and India serving clients worldwide</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="advantage-box text-center">
                                <div class="number">02</div>
                                <h5>Multi-Disciplinary</h5>
                                <p>Comprehensive services across all engineering disciplines</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="advantage-box text-center">
                                <div class="number">03</div>
                                <h5>BIM Integration</h5>
                                <p>Advanced Building Information Modeling capabilities</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="advantage-box text-center">
                                <div class="number">04</div>
                                <h5>Proven Track Record</h5>
                                <p>Hundreds of successful projects across multiple sectors</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="space WhyChoose bg-light">
    <div class="container">
        <div class="section-title text-center wow fadeInUp">
            <h2>Why Choose Us?</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="why-box text-center">
                    <div class="icon">
                        <i class="fa fa-lightbulb-o"></i>
                    </div>
                    <h4>Creative Ideas</h4>
                    <p>Innovative solutions tailored to your unique requirements</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="why-box text-center">
                    <div class="icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>Uniqueness</h4>
                    <p>Distinctive approach that sets us apart from competitors</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="why-box text-center">
                    <div class="icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <h4>High Efficiency</h4>
                    <p>Streamlined processes for faster project delivery</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="why-box text-center">
                    <div class="icon">
                        <i class="fa fa-trophy"></i>
                    </div>
                    <h4>Best Solution</h4>
                    <p>Optimal solutions backed by expertise and experience</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="space green-strip">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="text-white wow fadeInLeft">Let's start a conversation</h2>
                <p class="text-white wow fadeInLeft" data-wow-delay="0.2s">Ready to work with industry leaders? Contact us today.</p>
            </div>
            <div class="col-lg-4 text-right wow fadeInRight">
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Contact Us Now</a>
            </div>
        </div>
    </div>
</section>
@endsection
