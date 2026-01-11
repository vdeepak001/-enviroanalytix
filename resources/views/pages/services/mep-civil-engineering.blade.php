@extends('layouts.app-modern')

@section('title', 'MEP and Civil Engineering - EnviroAnalytix')

@section('content')
@include('components.hero', [
    'title' => 'MEP and Civil Engineering',
    'breadcrumbs' => [
        ['title' => 'Services', 'url' => route('services')],
        ['title' => 'MEP and Civil Engineering', 'url' => route('services.mep')]
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
                    <img src="{{ asset('images/services/mep-detail.jpg') }}" alt="MEP Engineering" class="img-fluid mb-4 rounded">
                    <h2>MEP and Civil Engineering Services</h2>
                    <p class="lead">Integrated mechanical, electrical, plumbing, and civil engineering solutions for complex building systems.</p>
                    <p>Comprehensive MEP and civil engineering services ensuring efficient, sustainable, and code-compliant building systems.</p>
                    
                    <h3 class="mt-5">Our Services Include:</h3>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="service-list-items">
                                <li><i class="fa fa-check-circle"></i> HVAC Design</li>
                                <li><i class="fa fa-check-circle"></i> Electrical Systems</li>
                                <li><i class="fa fa-check-circle"></i> Plumbing Design</li>
                                <li><i class="fa fa-check-circle"></i> Fire Protection</li>
                                <li><i class="fa fa-check-circle"></i> Energy Modeling</li>
                                <li><i class="fa fa-check-circle"></i> Lighting Design</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="service-list-items">
                                <li><i class="fa fa-check-circle"></i> Site Civil Design</li>
                                <li><i class="fa fa-check-circle"></i> Grading & Drainage</li>
                                <li><i class="fa fa-check-circle"></i> Utility Coordination</li>
                                <li><i class="fa fa-check-circle"></i> BIM/MEP Coordination</li>
                                <li><i class="fa fa-check-circle"></i> Low Voltage Systems</li>
                                <li><i class="fa fa-check-circle"></i> Renewable Energy Systems</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="cta-box mt-5">
                        <h4>Optimize Your Building Systems</h4>
                        <p>Connect with our MEP engineering team.</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
