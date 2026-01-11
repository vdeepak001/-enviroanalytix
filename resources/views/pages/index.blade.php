@extends('layouts.app-modern')

@section('title', 'EnviroAnalytix - Innovating Architectural, Engineering & Construction Excellence')

@section('content')
<!-- Modern Hero Section -->
<section class="modern-hero">
    <!-- Animated Background Particles -->
    <div class="particles">
        <div class="particle" style="width: 150px; height: 150px; top: 10%; left: 10%; animation-delay: 0s;"></div>
        <div class="particle" style="width: 100px; height: 100px; top: 60%; left: 80%; animation-delay: 3s;"></div>
        <div class="particle" style="width: 80px; height: 80px; top: 30%; left: 70%; animation-delay: 6s;"></div>
        <div class="particle" style="width: 120px; height: 120px; top: 70%; left: 20%; animation-delay: 9s;"></div>
    </div>
    
    <div class="container">
        <div class="hero-content">
            <span class="hero-badge">🚀 Welcome to EnviroAnalytix</span>
            <h1 class="hero-title">Innovating Architectural, Engineering & Construction Excellence</h1>
            <p class="hero-subtitle">
                For over 10 years, we've been at the forefront of the AEC industry, delivering cutting-edge solutions that drive efficiency, precision, and sustainability.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="{{ route('contact') }}" class="btn-modern btn-primary">
                    Get Started
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="{{ route('about') }}" class="btn-modern btn-outline">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item reveal">
                <div class="stat-number">10+</div>
                <div class="stat-label">Years of Excellence</div>
            </div>
            <div class="stat-item reveal">
                <div class="stat-number">500+</div>
                <div class="stat-label">Projects Completed</div>
            </div>
            <div class="stat-item reveal">
                <div class="stat-number">50+</div>
                <div class="stat-label">Countries Served</div>
            </div>
            <div class="stat-item reveal">
                <div class="stat-number">100%</div>
                <div class="stat-label">Client Satisfaction</div>
            </div>
        </div>
    </div>
</section>

<!-- Business Model & Advantages -->
<section class="services-section">
    <div class="container">
        <div class="section-header reveal">
            <h2 class="section-title">Why Choose EnviroAnalytix</h2>
            <p class="section-subtitle">Discover what makes us the trusted partner for architectural, engineering, and construction solutions worldwide.</p>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-lg-4 col-md-6">
                <div class="glass-card reveal">
                    <div class="feature-icon mb-3">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 6v6l4 2"/>
                        </svg>
                    </div>
                    <h3 class="feature-title">10+ Years Experience</h3>
                    <p class="feature-description">A decade of proven expertise in delivering cutting-edge AEC solutions across the globe.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="glass-card reveal">
                    <div class="feature-icon mb-3" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                            <line x1="12" y1="22.08" x2="12" y2="12"/>
                        </svg>
                    </div>
                    <h3 class="feature-title">Unique Business Model</h3>
                    <p class="feature-description">End-to-end design and engineering services with a client-first approach, leveraging BIM and 3D visualization.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="glass-card reveal">
                    <div class="feature-icon mb-3" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"/>
                            <polyline points="2 17 12 22 22 17"/>
                            <polyline points="2 12 12 17 22 12"/>
                        </svg>
                    </div>
                    <h3 class="feature-title">Global Expertise</h3>
                    <p class="feature-description">Local compliance meets global standards with our multidisciplinary collaborative teams.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Showcase -->
<section class="services-section" style="background: var(--dark-card); padding: 80px 0;">
    <div class="container">
        <div class="section-header reveal">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">We remain committed to providing superior service to our clients, and delivering exceptional results.</p>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-lg-4 col-md-6">
                <div class="service-card reveal">
                    <img src="{{ asset('images/modern/service_water.png') }}" alt="Water and Wastewater Engineering" class="service-card-image">
                    <div class="service-card-overlay">
                        <h3 class="service-card-title">Water & Wastewater Engineering</h3>
                        <p class="service-card-text">Sustainable water management solutions for modern infrastructure projects.</p>
                        <a href="{{ route('services.water') }}" class="btn-modern btn-primary mt-3" style="padding: 0.5rem 1.5rem; font-size: 0.875rem;">
                            Learn More →
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card reveal">
                    <img src="{{ asset('images/modern/service_buildings.png') }}" alt="Buildings Engineering" class="service-card-image">
                    <div class="service-card-overlay">
                        <h3 class="service-card-title">Buildings Engineering</h3>
                        <p class="service-card-text">Comprehensive building design and engineering solutions for commercial and residential projects.</p>
                        <a href="{{ route('services.buildings') }}" class="btn-modern btn-primary mt-3" style="padding: 0.5rem 1.5rem; font-size: 0.875rem;">
                            Learn More →
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card reveal">
                    <img src="{{ asset('images/modern/service_infrastructure.png') }}" alt="Infrastructure Engineering" class="service-card-image">
                    <div class="service-card-overlay">
                        <h3 class="service-card-title">Infrastructure & Transportation</h3>
                        <p class="service-card-text">Advanced infrastructure planning and transportation engineering solutions.</p>
                        <a href="{{ route('services.infrastructure') }}" class="btn-modern btn-primary mt-3" style="padding: 0.5rem 1.5rem; font-size: 0.875rem;">
                            Learn More →
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card reveal">
                    <img src="{{ asset('images/modern/service_architectural.png') }}" alt="Architectural Design" class="service-card-image">
                    <div class="service-card-overlay">
                        <h3 class="service-card-title">Architectural Design & BIM</h3>
                        <p class="service-card-text">Cutting-edge architectural design with advanced BIM technology integration.</p>
                        <a href="{{ route('services.architectural') }}" class="btn-modern btn-primary mt-3" style="padding: 0.5rem 1.5rem; font-size: 0.875rem;">
                            Learn More →
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card reveal">
                    <img src="{{ asset('images/modern/service_structural.png') }}" alt="Structural Engineering" class="service-card-image">
                    <div class="service-card-overlay">
                        <h3 class="service-card-title">Structural Engineering & BIM</h3>
                        <p class="service-card-text">Precision structural engineering with state-of-the-art BIM modeling.</p>
                        <a href="{{ route('services.structural') }}" class="btn-modern btn-primary mt-3" style="padding: 0.5rem 1.5rem; font-size: 0.875rem;">
                            Learn More →
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card reveal">
                    <img src="{{ asset('images/modern/service_mep.png') }}" alt="MEP Engineering" class="service-card-image">
                    <div class="service-card-overlay">
                        <h3 class="service-card-title">MEP & Civil Engineering</h3>
                        <p class="service-card-text">Comprehensive MEP and civil engineering solutions for complex projects.</p>
                        <a href="{{ route('services.mep') }}" class="btn-modern btn-primary mt-3" style="padding: 0.5rem 1.5rem; font-size: 0.875rem;">
                            Learn More →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Features -->
<section class="services-section">
    <div class="container">
        <div class="section-header reveal">
            <h2 class="section-title">Our Advantages</h2>
            <p class="section-subtitle">What sets us apart in the competitive AEC industry.</p>
        </div>
        
        <div class="features-grid mt-5">
            <div class="feature-card reveal">
                <div class="feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M12 1v6m0 6v6m8.66-10.34L15.9 12m-7.8 0L3.34 8.66M21 12h-6m-6 0H3m17.66 3.34L15.9 12m-7.8 0l-4.76 3.34"/>
                    </svg>
                </div>
                <h3 class="feature-title">Creative Ideas</h3>
                <p class="feature-description">We bring fresh, forward-thinking design and engineering concepts tailored to your project vision.</p>
            </div>
            
            <div class="feature-card reveal">
                <div class="feature-icon" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                </div>
                <h3 class="feature-title">Uniqueness</h3>
                <p class="feature-description">Our solutions stand out with a distinctive blend of innovation, precision, and practicality.</p>
            </div>
            
            <div class="feature-card reveal">
                <div class="feature-icon" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                </div>
                <h3 class="feature-title">High Efficiency</h3>
                <p class="feature-description">We deliver with speed, accuracy, and optimized resource utilization every time.</p>
            </div>
            
            <div class="feature-card reveal">
                <div class="feature-icon" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                </div>
                <h3 class="feature-title">Best Solution</h3>
                <p class="feature-description">We combine expertise and technology to craft the most effective, value-driven outcomes for our clients.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="modern-hero" style="min-height: 60vh;">
    <div class="container">
        <div class="hero-content reveal">
            <h2 class="hero-title" style="font-size: clamp(2rem, 4vw, 3.5rem);">Ready to Transform Your Project?</h2>
            <p class="hero-subtitle">Let's collaborate to bring your vision to life with our cutting-edge engineering solutions.</p>
            <a href="{{ route('contact') }}" class="btn-modern btn-primary">
                Contact Us Today
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<script>
// Scroll Reveal Animation
document.addEventListener('DOMContentLoaded', function() {
    const reveals = document.querySelectorAll('.reveal');
    
    const revealOnScroll = () => {
        reveals.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementTop < windowHeight - 100) {
                element.classList.add('active');
            }
        });
    };
    
    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); // Initial check
});

// Counter Animation for Stats
const animateCounter = (element, target, duration = 2000) => {
    let start = 0;
    const increment = target / (duration / 16);
    const timer = setInterval(() => {
        start += increment;
        if (start >= target) {
            element.textContent = target + (element.textContent.includes('+') ? '+' : element.textContent.includes('%') ? '%' : '');
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(start) + (element.textContent.includes('+') ? '+' : element.textContent.includes('%') ? '%' : '');
        }
    }, 16);
};

// Trigger counter animation when stats section is visible
const statsSection = document.querySelector('.stats-section');
let statsAnimated = false;

const checkStatsVisibility = () => {
    if (!statsAnimated && statsSection) {
        const rect = statsSection.getBoundingClientRect();
        if (rect.top < window.innerHeight && rect.bottom >= 0) {
            statsAnimated = true;
            document.querySelectorAll('.stat-number').forEach(stat => {
                const text = stat.textContent;
                const number = parseInt(text.replace(/\D/g, ''));
                stat.textContent = '0' + (text.includes('+') ? '+' : text.includes('%') ? '%' : '');
                animateCounter(stat, number);
            });
        }
    }
};

window.addEventListener('scroll', checkStatsVisibility);
checkStatsVisibility();
</script>
@endsection
