<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'EnviroAnalytix')</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    
    <!-- Modern Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/modern-theme.css') }}">
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    
    <!-- Animate.css for WOW.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <style>
        /* Header Override for Modern Theme */
        .header {
            background: rgba(15, 15, 35, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        /* Light Theme Header Styles */
        [data-theme='light'] .header {
            background: rgba(255, 255, 255, 0.95);
            border-bottom: 1px solid rgba(30, 41, 59, 0.1);
        }
        
        .header .navbar-nav .nav-link {
            color: var(--text-light) !important;
        }
        
        .header .navbar-nav .nav-link:hover {
            color: var(--primary-color) !important;
        }
        
        .header .navbar-nav .active .nav-link {
            color: var(--primary-color) !important;
        }
        
        .header .logo {
            max-height: 60px;
            width: auto;
        }
        
        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.3);
            transition: border-color 0.3s ease;
        }
        
        [data-theme='light'] .navbar-toggler {
            border-color: rgba(30, 41, 59, 0.3);
        }
        
        .navbar-toggler-icon {
            color: white;
            transition: color 0.3s ease;
        }
        
        [data-theme='light'] .navbar-toggler-icon {
            color: #1e293b;
        }
        
        /* Footer Styling */
        footer {
            background: var(--dark-card);
            padding: 60px 0 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        footer h5 {
            color: var(--text-light);
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        footer p, footer a {
            color: var(--text-muted);
            font-size: 0.9375rem;
        }
        
        footer a:hover {
            color: var(--primary-color);
        }
        
        .footer-bottom {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            color: var(--text-muted);
        }
    </style>
    
    <script>
        // Apply theme immediately to prevent FOUC
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            document.documentElement.setAttribute('data-theme', savedTheme);
        }
    </script>
    @stack('styles')
</head>
<body>
    <!-- Header -->
    @include('components.header')
    
    <!-- Main Content -->
    @yield('content')
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>EnviroAnalytix</h5>
                    <p>Innovating Architectural, Engineering & Construction Excellence for over 10 years.</p>
                    <div class="mt-3">
                        <a href="#" class="me-3"><i class="fa fa-facebook" style="font-size: 1.5rem;"></i></a>
                        <a href="#" class="me-3"><i class="fa fa-twitter" style="font-size: 1.5rem;"></i></a>
                        <a href="#" class="me-3"><i class="fa fa-linkedin" style="font-size: 1.5rem;"></i></a>
                        <a href="#"><i class="fa fa-instagram" style="font-size: 1.5rem;"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Quick Links</h5>
                    <ul style="list-style: none; padding: 0;">
                        <li class="mb-2"><a href="{{ route('home') }}">Home</a></li>
                        <li class="mb-2"><a href="{{ route('about') }}">About Us</a></li>
                        <li class="mb-2"><a href="{{ route('services') }}">Services</a></li>
                        <li class="mb-2"><a href="{{ route('projects') }}">Projects</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Services</h5>
                    <ul style="list-style: none; padding: 0;">
                        <li class="mb-2"><a href="#">Architectural Design</a></li>
                        <li class="mb-2"><a href="#">Structural Engineering</a></li>
                        <li class="mb-2"><a href="#">MEP Engineering</a></li>
                        <li class="mb-2"><a href="#">BIM Services</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Contact</h5>
                    <p><i class="fa fa-map-marker me-2"></i> Your Address Here</p>
                    <p><i class="fa fa-phone me-2"></i> +1 234 567 8900</p>
                    <p><i class="fa fa-envelope me-2"></i> info@pmsglobal.com</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} EnviroAnalytix. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript Files -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    
    <!-- WOW.js for Scroll Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        // Initialize WOW.js for scroll animations
        new WOW().init();
    </script>
    
    
    @stack('scripts')
    
    <script>
        // Theme Management - Wait for DOM to be ready
        document.addEventListener('DOMContentLoaded', function() {
            const themeToggle = document.getElementById('theme-toggle');
            const themeIcon = document.getElementById('theme-icon');
            const htmlElement = document.documentElement;

            // Function to set theme
            const setTheme = (theme) => {
                htmlElement.setAttribute('data-theme', theme);
                localStorage.setItem('theme', theme);
                
                if (theme === 'light') {
                    themeIcon.classList.remove('fa-moon-o');
                    themeIcon.classList.add('fa-sun-o');
                    themeIcon.style.color = '#1e293b';
                } else {
                    themeIcon.classList.remove('fa-sun-o');
                    themeIcon.classList.add('fa-moon-o');
                    themeIcon.style.color = '#e4e4e7';
                }
            };

            // Initialize theme from local storage or system preference
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) {
                setTheme(savedTheme);
            } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
                // Default to dark if not specified, but check preference
                // setTheme('dark'); 
            }

            // Toggle theme on click
            themeToggle.addEventListener('click', () => {
                const currentTheme = htmlElement.getAttribute('data-theme');
                const newTheme = currentTheme === 'light' ? 'dark' : 'light';
                setTheme(newTheme);
            });
        });
    </script>
</body>
</html>

