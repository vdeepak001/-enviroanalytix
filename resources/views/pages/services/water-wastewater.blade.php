@extends('layouts.app-modern')

@section('title', 'Water and Wastewater Engineering - EnviroAnalytix')

@section('content')
<!-- Page Banner -->
@include('components.hero', [
    'title' => 'Water and Wastewater Engineering',
    'breadcrumbs' => [
        ['title' => 'Services', 'url' => route('services')],
        ['title' => 'Water and Wastewater Engineering', 'url' => route('services.water')]
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
                    <img src="{{ asset('images/services/water-detail.jpg') }}" alt="Water and Wastewater Engineering" class="img-fluid mb-4 rounded">
                    
                    <h2>Water and Wastewater Engineering Services</h2>
                    <p class="lead">Sustainable water infrastructure solutions for treatment plants, distribution systems, and wastewater management.</p>
                    
                    <p>Our water and wastewater engineering team provides comprehensive solutions for municipal, industrial, and commercial water systems. We specialize in designing efficient, sustainable, and cost-effective water infrastructure that meets the highest environmental and regulatory standards.</p>

                    <h3 class="mt-5">Our Water Engineering Services Include:</h3>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="service-list-items">
                                <li><i class="fa fa-check-circle"></i> Water Treatment Plant Design</li>
                                <li><i class="fa fa-check-circle"></i> Wastewater Treatment Facilities</li>
                                <li><i class="fa fa-check-circle"></i> Water Distribution Systems</li>
                                <li><i class="fa fa-check-circle"></i> Pumping Stations</li>
                                <li><i class="fa fa-check-circle"></i> Storage Tanks & Reservoirs</li>
                                <li><i class="fa fa-check-circle"></i> Stormwater Management</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="service-list-items">
                                <li><i class="fa fa-check-circle"></i> Sewerage Collection Systems</li>
                                <li><i class="fa fa-check-circle"></i> Water Quality Analysis</li>
                                <li><i class="fa fa-check-circle"></i> Hydraulic Modeling</li>
                                <li><i class="fa fa-check-circle"></i> Industrial Water Systems</li>
                                <li><i class="fa fa-check-circle"></i> Water Reuse & Recycling</li>
                                <li><i class="fa fa-check-circle"></i> Desalination Plants</li>
                            </ul>
                        </div>
                    </div>

                    <h3 class="mt-5">Key Features</h3>
                    <div class="feature-boxes mt-4">
                        <div class="feature-box mb-3">
                            <h5><i class="fa fa-leaf"></i> Sustainable Solutions</h5>
                            <p>Environmentally responsible designs that promote water conservation and resource recovery.</p>
                        </div>
                        <div class="feature-box mb-3">
                            <h5><i class="fa fa-flask"></i> Advanced Treatment Technologies</h5>
                            <p>Expertise in cutting-edge water treatment processes and technologies.</p>
                        </div>
                        <div class="feature-box mb-3">
                            <h5><i class="fa fa-shield"></i> Regulatory Compliance</h5>
                            <p>Full compliance with EPA, WHO, and local water quality standards.</p>
                        </div>
                        <div class="feature-box mb-3">
                            <h5><i class="fa fa-line-chart"></i> Lifecycle Cost Optimization</h5>
                            <p>Designs optimized for operational efficiency and long-term cost savings.</p>
                        </div>
                    </div>

                    <div class="cta-box mt-5">
                        <h4>Need Water Infrastructure Solutions?</h4>
                        <p>Contact our water engineering specialists for expert consultation.</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
