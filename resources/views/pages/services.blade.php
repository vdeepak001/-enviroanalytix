@extends('layouts.app-modern')

@section('title', 'Services - EnviroAnalytix')

@section('content')
<!-- Page Banner -->
@include('components.hero', [
    'title' => 'Services',
    'breadcrumbs' => [
        ['title' => 'Services', 'url' => route('services')]
    ]
])

<!-- Services Section -->
<section class="space services-page">
    <div class="container">
        <div class="section-title text-center wow fadeInUp">
            <h2>Our Services</h2>
            <p>Comprehensive Engineering Solutions for Every Project</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                @include('components.service-card', [
                    'image' => asset('images/services/water-wastewater.jpg'),
                    'title' => 'Water and Wastewater Engineering',
                    'description' => 'Comprehensive water infrastructure design, treatment plant engineering, and sustainable wastewater management solutions.',
                    'link' => route('services.water')
                ])
            </div>
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                @include('components.service-card', [
                    'image' => asset('images/services/buildings.jpg'),
                    'title' => 'Buildings Engineering',
                    'description' => 'Complete building design and engineering services from concept to completion for residential, commercial, and institutional projects.',
                    'link' => route('services.buildings')
                ])
            </div>
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                @include('components.service-card', [
                    'image' => asset('images/services/infrastructure.jpg'),
                    'title' => 'Infrastructure and Transportation Engineering',
                    'description' => 'Modern infrastructure planning, design, and engineering for roads, bridges, highways, and transportation systems.',
                    'link' => route('services.infrastructure')
                ])
            </div>
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.4s">
                @include('components.service-card', [
                    'image' => asset('images/services/architectural.jpg'),
                    'title' => 'Architectural Design and BIM',
                    'description' => 'Creative architectural solutions integrated with Building Information Modeling for enhanced project visualization and coordination.',
                    'link' => route('services.architectural')
                ])
            </div>
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.5s">
                @include('components.service-card', [
                    'image' => asset('images/services/structural.jpg'),
                    'title' => 'Structural Engineering and BIM',
                    'description' => 'Advanced structural analysis, design, and BIM implementation for safe and efficient building structures.',
                    'link' => route('services.structural')
                ])
            </div>
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.6s">
                @include('components.service-card', [
                    'image' => asset('images/services/scan-bim.jpg'),
                    'title' => 'SCAN to BIM',
                    'description' => '3D laser scanning and point cloud to BIM conversion services for accurate as-built documentation and renovation projects.',
                    'link' => route('services.scan')
                ])
            </div>
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.7s">
                @include('components.service-card', [
                    'image' => asset('images/services/mep.jpg'),
                    'title' => 'MEP and Civil Engineering',
                    'description' => 'Integrated mechanical, electrical, plumbing, and civil engineering solutions for complex building systems.',
                    'link' => route('services.mep')
                ])
            </div>
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.8s">
                @include('components.service-card', [
                    'image' => asset('images/services/industrial.jpg'),
                    'title' => 'Industrial, Oil & Gas Sector Engineering Services',
                    'description' => 'Specialized engineering services for industrial facilities, oil & gas infrastructure, and process plants.',
                    'link' => route('services.industrial')
                ])
            </div>
        </div>
    </div>
</section>
@endsection
