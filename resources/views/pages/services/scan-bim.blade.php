@extends('layouts.app-modern')

@section('title', 'SCAN to BIM - EnviroAnalytix')

@section('content')
@include('components.hero', [
    'title' => 'SCAN to BIM',
    'breadcrumbs' => [
        ['title' => 'Services', 'url' => route('services')],
        ['title' => 'SCAN to BIM', 'url' => route('services.scan')]
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
                    <img src="{{ asset('images/services/scan-bim-detail.jpg') }}" alt="SCAN to BIM" class="img-fluid mb-4 rounded">
                    <h2>SCAN to BIM Services</h2>
                    <p class="lead">3D laser scanning and point cloud to BIM conversion services for accurate as-built documentation and renovation projects.</p>
                    <p>Transform physical spaces into intelligent 3D models with our advanced laser scanning and BIM conversion services.</p>
                    
                    <h3 class="mt-5">Our Services Include:</h3>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="service-list-items">
                                <li><i class="fa fa-check-circle"></i> 3D Laser Scanning</li>
                                <li><i class="fa fa-check-circle"></i> Point Cloud Processing</li>
                                <li><i class="fa fa-check-circle"></i> As-Built BIM Modeling</li>
                                <li><i class="fa fa-check-circle"></i> Clash Detection</li>
                                <li><i class="fa fa-check-circle"></i> Renovation Planning</li>
                                <li><i class="fa fa-check-circle"></i> Heritage Documentation</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="service-list-items">
                                <li><i class="fa fa-check-circle"></i> Facility Management Models</li>
                                <li><i class="fa fa-check-circle"></i> Quality Control</li>
                                <li><i class="fa fa-check-circle"></i> Reality Capture</li>
                                <li><i class="fa fa-check-circle"></i> LOD Development</li>
                                <li><i class="fa fa-check-circle"></i> Photogrammetry</li>
                                <li><i class="fa fa-check-circle"></i> Drone Surveying</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="cta-box mt-5">
                        <h4>Digitize Your Built Environment</h4>
                        <p>Explore our SCAN to BIM capabilities.</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
