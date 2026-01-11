@extends('layouts.app-modern')

@section('title', 'Buildings Engineering - EnviroAnalytix')

@section('content')
<!-- Page Banner -->
@include('components.hero', [
    'title' => 'Buildings Engineering',
    'breadcrumbs' => [
        ['title' => 'Services', 'url' => route('services')],
        ['title' => 'Buildings Engineering', 'url' => route('services.buildings')]
    ]
])

<!-- Service Detail Section -->
<section class="space service-detail">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 wow fadeInLeft">
                @include('components.service-sidebar')
            </div>

            <!-- Main Content -->
            <div class="col-lg-9 wow fadeInRight">
                <div class="service-content">
                    <img src="{{ asset('images/services/buildings-detail.jpg') }}" alt="Buildings Engineering" class="img-fluid mb-4 rounded">
                    
                    <h2>Buildings Engineering Services</h2>
                    <p class="lead">Comprehensive building design and engineering solutions from concept to completion for residential, commercial, and institutional projects.</p>
                    
                    <p>At EnviroAnalytix, our buildings engineering services encompass the complete spectrum of design and analysis for structures of all types and complexities. We combine innovative design approaches with proven engineering principles to deliver exceptional building solutions that meet the highest standards of safety, functionality, and sustainability.</p>

                    <h3 class="mt-5">Our Buildings Engineering Services Include:</h3>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="service-list-items">
                                <li><i class="fa fa-check-circle"></i> Residential Building Design</li>
                                <li><i class="fa fa-check-circle"></i> Commercial Complex Engineering</li>
                                <li><i class="fa fa-check-circle"></i> High-Rise Tower Design</li>
                                <li><i class="fa fa-check-circle"></i> Institutional Buildings</li>
                                <li><i class="fa fa-check-circle"></i> Mixed-Use Developments</li>
                                <li><i class="fa fa-check-circle"></i> Healthcare Facilities</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="service-list-items">
                                <li><i class="fa fa-check-circle"></i> Educational Facilities</li>
                                <li><i class="fa fa-check-circle"></i> Hospitality Projects</li>
                                <li><i class="fa fa-check-circle"></i> Sports & Recreation Centers</li>
                                <li><i class="fa fa-check-circle"></i> Retail Centers</li>
                                <li><i class="fa fa-check-circle"></i> Parking Structures</li>
                                <li><i class="fa fa-check-circle"></i> Renovation & Retrofitting</li>
                            </ul>
                        </div>
                    </div>

                    <h3 class="mt-5">Key Features</h3>
                    <div class="feature-boxes mt-4">
                        <div class="feature-box mb-3">
                            <h5><i class="fa fa-cubes"></i> Advanced Structural Analysis</h5>
                            <p>State-of-the-art structural analysis tools and methodologies ensuring optimal design and safety.</p>
                        </div>
                        <div class="feature-box mb-3">
                            <h5><i class="fa fa-leaf"></i> Sustainable Design</h5>
                            <p>Green building design principles and LEED certification support for environmentally responsible construction.</p>
                        </div>
                        <div class="feature-box mb-3">
                            <h5><i class="fa fa-code"></i> Code Compliance</h5>
                            <p>Expertise in international building codes including IBC, NBC, Eurocode, AS, and regional standards.</p>
                        </div>
                        <div class="feature-box mb-3">
                            <h5><i class="fa fa-desktop"></i> BIM Integration</h5>
                            <p>Full Building Information Modeling workflow for enhanced coordination and clash detection.</p>
                        </div>
                    </div>

                    <h3 class="mt-5">Why Choose Our Buildings Engineering Services?</h3>
                    <p>Our team of experienced structural and building engineers brings together global expertise with local knowledge. We understand the unique requirements of different building types and ensure that every project is delivered with the highest level of quality and professionalism.</p>
                    
                    <div class="cta-box mt-5">
                        <h4>Ready to Start Your Building Project?</h4>
                        <p>Contact our buildings engineering experts to discuss your requirements.</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
