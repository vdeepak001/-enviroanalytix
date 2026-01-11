@extends('layouts.app-modern')

@section('title', 'Structural Engineering and BIM - EnviroAnalytix')

@section('content')
@include('components.hero', [
    'title' => 'Structural Engineering and BIM',
    'breadcrumbs' => [
        ['title' => 'Services', 'url' => route('services')],
        ['title' => 'Structural Engineering and BIM', 'url' => route('services.structural')]
    ]
])

<section class="space service-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 wow fadeInLeft">
                @include('components.service-sidebar')
            </div>
            <div class="col-lg-9 wow fadeInRight">
                <div class="service-content">
                    <img src="{{ asset('images/services/structural-detail.jpg') }}" alt="Structural Engineering" class="img-fluid mb-4 rounded">
                    <h2>Structural Engineering and BIM Services</h2>
                    <p class="lead">Advanced structural analysis, design, and BIM implementation for safe and efficient building structures.</p>
                    <p>Our structural engineering team combines deep technical expertise with BIM technologies to deliver optimal structural solutions.</p>
                    
                    <h3 class="mt-5">Our Services Include:</h3>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="service-list-items">
                                <li><i class="fa fa-check-circle"></i> Structural Analysis</li>
                                <li><i class="fa fa-check-circle"></i> Steel Design</li>
                                <li><i class="fa fa-check-circle"></i> Concrete Design</li>
                                <li><i class="fa fa-check-circle"></i> Foundation Engineering</li>
                                <li><i class="fa fa-check-circle"></i> Seismic Design</li>
                                <li><i class="fa fa-check-circle"></i> Wind Engineering</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="service-list-items">
                                <li><i class="fa fa-check-circle"></i> Structural BIM Modeling</li>
                                <li><i class="fa fa-check-circle"></i> Detailing & Drafting</li>
                                <li><i class="fa fa-check-circle"></i> Connection Design</li>
                                <li><i class="fa fa-check-circle"></i> Renovation Assessment</li>
                                <li><i class="fa fa-check-circle"></i> Peer Review</li>
                                <li><i class="fa fa-check-circle"></i> Construction Support</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="cta-box mt-5">
                        <h4>Ensure Structural Excellence</h4>
                        <p>Partner with our structural engineering professionals.</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
