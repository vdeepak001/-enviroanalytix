@extends('layouts.app-modern')

@section('title', 'Industrial, Oil & Gas Sector Engineering - EnviroAnalytix')

@section('content')
@include('components.hero', [
    'title' => 'Industrial, Oil & Gas Sector Engineering Services',
    'breadcrumbs' => [
        ['title' => 'Services', 'url' => route('services')],
        ['title' => 'Industrial Oil & Gas Engineering', 'url' => route('services.industrial')]
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
                    <img src="{{ asset('images/services/industrial-detail.jpg') }}" alt="Industrial Engineering" class="img-fluid mb-4 rounded">
                    <h2>Industrial, Oil & Gas Sector Engineering Services</h2>
                    <p class="lead">Specialized engineering services for industrial facilities, oil & gas infrastructure, and process plants.</p>
                    <p>Expert engineering solutions for the industrial and energy sectors with a focus on safety, efficiency, and compliance.</p>
                    
                    <h3 class="mt-5">Our Services Include:</h3>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="service-list-items">
                                <li><i class="fa fa-check-circle"></i> Process Plant Design</li>
                                <li><i class="fa fa-check-circle"></i> Refinery Engineering</li>
                                <li><i class="fa fa-check-circle"></i> Petrochemical Facilities</li>
                                <li><i class="fa fa-check-circle"></i> Pipeline Design</li>
                                <li><i class="fa fa-check-circle"></i> Storage Tank Design</li>
                                <li><i class="fa fa-check-circle"></i> Offshore Structures</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="service-list-items">
                                <li><i class="fa fa-check-circle"></i> Industrial Buildings</li>
                                <li><i class="fa fa-check-circle"></i> Power Plant Engineering</li>
                                <li><i class="fa fa-check-circle"></i> Manufacturing Facilities</li>
                                <li><i class="fa fa-check-circle"></i> Safety Systems</li>
                                <li><i class="fa fa-check-circle"></i> Instrumentation Design</li>
                                <li><i class="fa fa-check-circle"></i> Piping Design</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="cta-box mt-5">
                        <h4>Industrial Project Excellence</h4>
                        <p>Discuss your industrial engineering requirements.</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
