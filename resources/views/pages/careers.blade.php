@extends('layouts.app-modern')

@section('title', 'Careers - EnviroAnalytix')

@section('content')
<!-- Page Banner -->
@include('components.hero', [
    'title' => 'Careers',
    'breadcrumbs' => [
        ['title' => 'Careers', 'url' => route('careers')]
    ]
])

<!-- Careers Section -->
<section class="space careers-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center wow fadeInUp">
                <h2>Join Our Team</h2>
                <p class="lead">Be part of a global organization that values innovation, excellence, and professional growth. At EnviroAnalytix, we offer exciting opportunities for talented professionals to work on challenging projects worldwide.</p>
            </div>
        </div>

        <!-- Why Work With Us -->
        <div class="row mt-5">
            <div class="col-lg-12 wow fadeInUp">
                <h3 class="text-center mb-4">Why Work With Us?</h3>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="career-benefit text-center">
                    <div class="icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <h5>Global Exposure</h5>
                    <p>Work on international projects across multiple countries</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="career-benefit text-center">
                    <div class="icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <h5>Learning & Development</h5>
                    <p>Continuous training and skill enhancement programs</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="career-benefit text-center">
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <h5>Collaborative Culture</h5>
                    <p>Work with expert professionals from diverse backgrounds</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="career-benefit text-center">
                    <div class="icon">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <h5>Career Growth</h5>
                    <p>Clear career progression paths and advancement opportunities</p>
                </div>
            </div>
        </div>

        <!-- Current Openings -->
        <div class="row mt-5">
            <div class="col-lg-12 wow fadeInUp">
                <h3 class="text-center mb-4">Current Openings</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="job-listing wow fadeInUp" data-wow-delay="0.1s">
                    <div class="job-card">
                        <div class="job-header">
                            <h4>Senior Structural Engineer</h4>
                            <span class="badge badge-primary">Full Time</span>
                        </div>
                        <div class="job-details">
                            <p><i class="fa fa-map-marker"></i> Multiple Locations</p>
                            <p><i class="fa fa-briefcase"></i> 5+ Years Experience</p>
                        </div>
                        <div class="job-description">
                            <p>Looking for experienced structural engineers with expertise in BIM and international building codes.</p>
                        </div>
                        <a href="{{ route('contact') }}" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>

                <div class="job-listing wow fadeInUp" data-wow-delay="0.2s">
                    <div class="job-card">
                        <div class="job-header">
                            <h4>BIM Specialist - Architectural</h4>
                            <span class="badge badge-primary">Full Time</span>
                        </div>
                        <div class="job-details">
                            <p><i class="fa fa-map-marker"></i> India / Remote</p>
                            <p><i class="fa fa-briefcase"></i> 3+ Years Experience</p>
                        </div>
                        <div class="job-description">
                            <p>Seeking BIM experts with strong Revit skills and architectural design background.</p>
                        </div>
                        <a href="{{ route('contact') }}" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>

                <div class="job-listing wow fadeInUp" data-wow-delay="0.3s">
                    <div class="job-card">
                        <div class="job-header">
                            <h4>MEP Engineer</h4>
                            <span class="badge badge-primary">Full Time</span>
                        </div>
                        <div class="job-details">
                            <p><i class="fa fa-map-marker"></i> USA / Canada</p>
                            <p><i class="fa fa-briefcase"></i> 4+ Years Experience</p>
                        </div>
                        <div class="job-description">
                            <p>Experienced MEP engineers needed for large-scale commercial and residential projects.</p>
                        </div>
                        <a href="{{ route('contact') }}" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>

                <div class="job-listing wow fadeInUp" data-wow-delay="0.4s">
                    <div class="job-card">
                        <div class="job-header">
                            <h4>Civil/Infrastructure Engineer</h4>
                            <span class="badge badge-primary">Full Time</span>
                        </div>
                        <div class="job-details">
                            <p><i class="fa fa-map-marker"></i> Australia</p>
                            <p><i class="fa fa-briefcase"></i> 5+ Years Experience</p>
                        </div>
                        <div class="job-description">
                            <p>Infrastructure engineers with experience in transportation and water projects.</p>
                        </div>
                        <a href="{{ route('contact') }}" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Application Process -->
        <div class="row mt-5">
            <div class="col-lg-10 offset-lg-1 wow fadeInUp">
                <div class="application-process">
                    <h3 class="text-center mb-4">Application Process</h3>
                    <div class="row">
                        <div class="col-md-3 text-center mb-3">
                            <div class="process-step">
                                <div class="step-number">1</div>
                                <h5>Apply</h5>
                                <p>Submit your application</p>
                            </div>
                        </div>
                        <div class="col-md-3 text-center mb-3">
                            <div class="process-step">
                                <div class="step-number">2</div>
                                <h5>Review</h5>
                                <p>Application screening</p>
                            </div>
                        </div>
                        <div class="col-md-3 text-center mb-3">
                            <div class="process-step">
                                <div class="step-number">3</div>
                                <h5>Interview</h5>
                                <p>Technical & HR rounds</p>
                            </div>
                        </div>
                        <div class="col-md-3 text-center mb-3">
                            <div class="process-step">
                                <div class="step-number">4</div>
                                <h5>Offer</h5>
                                <p>Join our team</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
