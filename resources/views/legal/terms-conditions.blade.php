@extends('layouts.app-modern')

@section('title', 'Terms & Conditions - EnviroAnalytix')

@section('content')
@include('components.hero', [
    'title' => 'Terms & Conditions',
    'breadcrumbs' => [
        ['title' => 'Terms & Conditions', 'url' => route('terms')]
    ]
])

<section class="space legal-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="legal-content">
                    <p class="text-muted">Last Updated: January 2026</p>
                    
                    <h3>1. Agreement to Terms</h3>
                    <p>By accessing and using EnviroAnalytix's website and services, you agree to be bound by these Terms and Conditions. If you do not agree with any part of these terms, you may not access the website or use our services.</p>

                    <h3 class="mt-4">2. Use License</h3>
                    <p>Permission is granted to temporarily view and access the materials on EnviroAnalytix's website for personal, non-commercial use only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>
                    <ul>
                        <li>Modify or copy the materials</li>
                        <li>Use the materials for commercial purposes</li>
                        <li>Attempt to reverse engineer any software contained on the website</li>
                        <li>Remove any copyright or proprietary notations from the materials</li>
                    </ul>

                    <h3 class="mt-4">3. Services</h3>
                    <p>EnviroAnalytix provides architectural, engineering, and construction (AEC) services. All services are subject to separate agreements and contracts which govern the specific terms of each engagement.</p>

                    <h3 class="mt-4">4. Intellectual Property</h3>
                    <p>The content, organization, graphics, design, compilation, and other matters related to the website are protected under applicable copyrights, trademarks, and other proprietary rights. All intellectual property created as part of our services remains subject to the terms of individual service agreements.</p>

                    <h3 class="mt-4">5. Limitation of Liability</h3>
                    <p>In no event shall EnviroAnalytix or its suppliers be liable for any damages arising out of the use or inability to use the materials on our website, even if we have been notified of the possibility of such damages.</p>

                    <h3 class="mt-4">6. Accuracy of Materials</h3>
                    <p>The materials appearing on EnviroAnalytix's website may include technical, typographical, or photographic errors. We do not warrant that any of the materials are accurate, complete, or current.</p>

                    <h3 class="mt-4">7. Links</h3>
                    <p>EnviroAnalytix has not reviewed all sites linked to our website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by EnviroAnalytix.</p>

                    <h3 class="mt-4">8. Modifications</h3>
                    <p>EnviroAnalytix may revise these Terms and Conditions at any time without notice. By using this website, you are agreeing to be bound by the current version of these Terms and Conditions.</p>

                    <h3 class="mt-4">9. Governing Law</h3>
                    <p>These terms and conditions are governed by and construed in accordance with the laws of Delaware, USA, and you irrevocably submit to the exclusive jurisdiction of the courts in that location.</p>

                    <h3 class="mt-4">10. Contact Information</h3>
                    <p>If you have any questions about these Terms and Conditions, please contact us at:</p>
                    <p>
                        <strong>Email:</strong> legal@enviroanalytix.com<br>
                        <strong>Address:</strong> 8 The Green Ste A, Dover, DE 19901, USA
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
