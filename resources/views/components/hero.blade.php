<section class="page-banner" style="background-image: url('{{ $backgroundImage ?? asset('images/banner2.jpg') }}');">
    <div class="banner-overlay"></div>
    <div class="container">
        <div class="banner-content">
            <h1 class="page-title">{{ $title }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    @if(isset($breadcrumbs) && is_array($breadcrumbs))
                        @foreach($breadcrumbs as $crumb)
                            @if($loop->last)
                                <li class="breadcrumb-item active" aria-current="page">{{ $crumb['title'] }}</li>
                            @else
                                <li class="breadcrumb-item"><a href="{{ $crumb['url'] }}">{{ $crumb['title'] }}</a></li>
                            @endif
                        @endforeach
                    @else
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                    @endif
                </ol>
            </nav>
        </div>
    </div>
</section>
