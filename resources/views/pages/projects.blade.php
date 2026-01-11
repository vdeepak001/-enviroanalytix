@extends('layouts.app-modern')

@section('title', 'Projects - EnviroAnalytix')

@section('content')
<!-- Page Banner -->
@include('components.hero', [
    'title' => 'Projects',
    'breadcrumbs' => [
        ['title' => 'Projects', 'url' => route('projects')]
    ]
])

<!-- Projects Section -->
<section class="space projects-page">
    <div class="container">
        <div class="section-title text-center wow fadeInUp">
            <h2>Our Projects</h2>
            <p>Delivering Excellence Across the Globe</p>
        </div>

        <!-- Project Filter -->
        <div class="project-filter text-center mb-5 wow fadeInUp">
            <h5>Projects by Location:</h5>
            <div class="filter-buttons">
                <button class="btn btn-outline-primary active" data-filter="all">All Countries</button>
                <button class="btn btn-outline-primary" data-filter="usa">USA</button>
                <button class="btn btn-outline-primary" data-filter="canada">Canada</button>
                <button class="btn btn-outline-primary" data-filter="australia">Australia</button>
                <button class="btn btn-outline-primary" data-filter="india">India</button>
                <button class="btn btn-outline-primary" data-filter="uk">United Kingdom</button>
                <button class="btn btn-outline-primary" data-filter="uae">UAE</button>
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="row projects-grid">
            <div class="col-lg-4 col-md-6 mb-4 project-item usa wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-card">
                    <div class="project-image">
                        <img src="{{ asset('images/projects/project-1.jpg') }}" alt="Commercial Building - USA" class="img-fluid">
                        <div class="project-overlay">
                            <div class="overlay-content">
                                <h4>Commercial Complex</h4>
                                <p><i class="fa fa-map-marker"></i> New York, USA</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h5>High-Rise Commercial Building</h5>
                        <p class="project-category">Buildings Engineering</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 project-item canada wow fadeInUp" data-wow-delay="0.2s">
                <div class="project-card">
                    <div class="project-image">
                        <img src="{{ asset('images/projects/project-2.jpg') }}" alt="Infrastructure - Canada" class="img-fluid">
                        <div class="project-overlay">
                            <div class="overlay-content">
                                <h4>Highway Infrastructure</h4>
                                <p><i class="fa fa-map-marker"></i> Toronto, Canada</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h5>Major Highway Expansion</h5>
                        <p class="project-category">Infrastructure Engineering</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 project-item australia wow fadeInUp" data-wow-delay="0.3s">
                <div class="project-card">
                    <div class="project-image">
                        <img src="{{ asset('images/projects/project-3.jpg') }}" alt="Water Treatment - Australia" class="img-fluid">
                        <div class="project-overlay">
                            <div class="overlay-content">
                                <h4>Water Treatment Plant</h4>
                                <p><i class="fa fa-map-marker"></i> Melbourne, Australia</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h5>Advanced Water Treatment Facility</h5>
                        <p class="project-category">Water Engineering</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 project-item usa wow fadeInUp" data-wow-delay="0.4s">
                <div class="project-card">
                    <div class="project-image">
                        <img src="{{ asset('images/projects/project-4.jpg') }}" alt="Residential - USA" class="img-fluid">
                        <div class="project-overlay">
                            <div class="overlay-content">
                                <h4>Residential Complex</h4>
                                <p><i class="fa fa-map-marker"></i> Los Angeles, USA</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h5>Luxury Residential Towers</h5>
                        <p class="project-category">Structural BIM</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 project-item india wow fadeInUp" data-wow-delay="0.5s">
                <div class="project-card">
                    <div class="project-image">
                        <img src="{{ asset('images/projects/project-5.jpg') }}" alt="Industrial - India" class="img-fluid">
                        <div class="project-overlay">
                            <div class="overlay-content">
                                <h4>Industrial Facility</h4>
                                <p><i class="fa fa-map-marker"></i> Noida, India</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h5>Manufacturing Plant</h5>
                        <p class="project-category">Industrial Engineering</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 project-item uk wow fadeInUp" data-wow-delay="0.6s">
                <div class="project-card">
                    <div class="project-image">
                        <img src="{{ asset('images/projects/project-6.jpg') }}" alt="Healthcare - UK" class="img-fluid">
                        <div class="project-overlay">
                            <div class="overlay-content">
                                <h4>Healthcare Facility</h4>
                                <p><i class="fa fa-map-marker"></i> London, UK</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h5>Modern Hospital Complex</h5>
                        <p class="project-category">MEP Engineering</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    // Simple project filter
    $(document).ready(function() {
        $('.filter-buttons .btn').click(function() {
            $('.filter-buttons .btn').removeClass('active');
            $(this).addClass('active');
            
            var filter = $(this).data('filter');
            
            if(filter == 'all') {
                $('.project-item').fadeIn();
            } else {
                $('.project-item').hide();
                $('.project-item.' + filter).fadeIn();
            }
        });
    });
</script>
@endpush
@endsection
