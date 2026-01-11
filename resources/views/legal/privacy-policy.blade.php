@extends('layouts.app-modern')

@section('title', 'Privacy Policy - EnviroAnalytix')

@section('content')
@include('components.hero', [
    'title' => 'Privacy Policy',
    'breadcrumbs' => [
        ['title' => 'Privacy Policy', 'url' => route('privacy')]
    ]
])

<section class="space legal-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="legal-content">
                    <p class="text-muted">Last Updated: January 2026</p>
                    
                    <h3>1. Introduction</h3>
                    <p>EnviroAnalytix ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services.</p>

                    <h3 class="mt-4">2. Information We Collect</h3>
                    <p>We may collect information about you in a variety of ways. The information we may collect includes:</p>
                    <ul>
                        <li><strong>Personal Data:</strong> Name, email address, phone number, and other contact information you provide.</li>
                        <li><strong>Professional Information:</strong> Company name, job title, and project details.</li>
                        <li><strong>Usage Data:</strong> Information about how you use our website, products, and services.</li>
                    </ul>

                    <h3 class="mt-4">3. Use of Your Information</h3>
                    <p>We use the information we collect to:</p>
                    <ul>
                        <li>Provide, operate, and maintain our services</li>
                        <li>Improve, personalize, and expand our services</li>
                        <li>Communicate with you about projects and services</li>
                        <li>Send you updates and marketing materials (with your consent)</li>
                        <li>Respond to your inquiries and provide customer support</li>
                    </ul>

                    <h3 class="mt-4">4. Disclosure of Your Information</h3>
                    <p>We may share your information in the following situations:</p>
                    <ul>
                        <li><strong>With Service Providers:</strong> We may share your information with third-party service providers who perform services on our behalf.</li>
                        <li><strong>For Legal Purposes:</strong> We may disclose your information if required by law or in response to valid requests by public authorities.</li>
                        <li><strong>Business Transfers:</strong> We may share or transfer your information in connection with a merger, acquisition, or sale of assets.</li>
                    </ul>

                    <h3 class="mt-4">5. Data Security</h3>
                    <p>We implement appropriate technical and organizational security measures to protect your personal information. However, no method of transmission over the Internet is 100% secure.</p>

                    <h3 class="mt-4">6. Your Rights</h3>
                    <p>You have the right to:</p>
                    <ul>
                        <li>Access the personal information we hold about you</li>
                        <li>Request correction of inaccurate information</li>
                        <li>Request deletion of your personal information</li>
                        <li>Object to or restrict processing of your information</li>
                        <li>Withdraw consent at any time</li>
                    </ul>

                    <h3 class="mt-4">7. Contact Us</h3>
                    <p>If you have questions or concerns about this Privacy Policy, please contact us at:</p>
                    <p>
                        <strong>Email:</strong> privacy@enviroanalytix.com<br>
                        <strong>Address:</strong> 8 The Green Ste A, Dover, DE 19901, USA
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
