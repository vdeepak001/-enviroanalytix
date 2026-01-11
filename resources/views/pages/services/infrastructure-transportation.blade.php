@extends('layouts.app-modern')

@section('title', 'Infrastructure and Transportation Engineering - EnviroAnalytix')

@section('content')
@include('components.hero', [
    'title' => 'Infrastructure and Transportation Engineering',
    'breadcrumbs' => [
        ['title' => 'Services', 'url' => route('services')],
        ['title' => 'Infrastructure and Transportation', 'url' => route('services.infrastructure')]
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
                    <img src="{{ asset('images/services/infrastructure-detail.jpg') }}" alt="Infrastructure Engineering" class="img-fluid mb-4 rounded">
                    <h2>Infrastructure and Transportation Engineering</h2>
                    <p class="lead">Modern infrastructure planning, design, and engineering for roads, bridges, highways, and transportation systems.</p>
                    <p>We provide comprehensive infrastructure engineering services that support urban development and transportation networks worldwide.</p>
                    
                    <h3 class="mt-5">Our Services Include:</h3>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="service-list-items">
                                <li><i class="fa fa-check-circle"></i> Highway & Road Design</li>
                                <li><i class="fa fa-check-circle"></i> Bridge Engineering</li>
                                <li><i class="fa fa-check-circle"></i> Traffic Engineering</li>
                                <li><i class="fa fa-check-circle"></i> Railway Systems</li>
                                <li><i class="fa fa-check-circle"></i> Airport Infrastructure</li>
                                <li><i class="fa fa-check-circle"></i> Tunnel Engineering</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="service-list-items">
                                <li><i class="fa fa-check-circle"></i> Urban Planning</li>
                                <li><i class="fa fa-check-circle"></i> Pavement Design</li>
                                <li><i class="fa fa-check-circle"></i> Intelligent Transportation Systems</li>
                                <li><i class="fa fa-check-circle"></i> Drainage Systems</li>
                                <li><i class="fa fa-check-circle"></i> Site Development</li>
                                <li><i class="fa fa-check-circle"></i> Geotechnical Engineering</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="cta-box mt-5">
                        <h4>Plan Your Infrastructure Project</h4>
                        <p>Connect with our infrastructure engineering team today.</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
