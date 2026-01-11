@extends('layouts.app-modern')

@section('title', 'Architectural Design and BIM - EnviroAnalytix')

@section('content')
@include('components.hero', [
    'title' => 'Architectural Design and BIM',
    'breadcrumbs' => [
        ['title' => 'Services', 'url' => route('services')],
        ['title' => 'Architectural Design and BIM', 'url' => route('services.architectural')]
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
                    <img src="{{ asset('images/services/architectural-detail.jpg') }}" alt="Architectural Design" class="img-fluid mb-4 rounded">
                    <h2>Architectural Design and BIM Services</h2>
                    <p class="lead">Creative architectural solutions integrated with Building Information Modeling for enhanced project visualization and coordination.</p>
                    <p>Our architectural team delivers innovative, functional, and aesthetically pleasing designs using the latest BIM technologies.</p>
                    
                    <h3 class="mt-5">Our Services Include:</h3>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="service-list-items">
                                <li><i class="fa fa-check-circle"></i> Conceptual Design</li>
                                <li><i class="fa fa-check-circle"></i> Schematic Design</li>
                                <li><i class="fa fa-check-circle"></i> Design Development</li>
                                <li><i class="fa fa-check-circle"></i> Construction Documentation</li>
                                <li><i class="fa fa-check-circle"></i> 3D Modeling & Visualization</li>
                                <li><i class="fa fa-check-circle"></i> Interior Design</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="service-list-items">
                                <li><i class="fa fa-check-circle"></i> BIM Coordination</li>
                                <li><i class="fa fa-check-circle"></i> Clash Detection</li>
                                <li><i class="fa fa-check-circle"></i> Revit Modeling</li>
                                <li><i class="fa fa-check-circle"></i> Rendering & Animation</li>
                                <li><i class="fa fa-check-circle"></i> Virtual Reality Walkthroughs</li>
                                <li><i class="fa fa-check-circle"></i> Sustainable Design</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="cta-box mt-5">
                        <h4>Transform Your Vision into Reality</h4>
                        <p>Discuss your architectural needs with our design experts.</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
