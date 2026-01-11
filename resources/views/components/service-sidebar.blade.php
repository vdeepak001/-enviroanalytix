<aside class="service-sidebar">
    <h4>Our Services</h4>
    <ul class="service-list">
        <li class="{{ request()->routeIs('services.water') ? 'active' : '' }}">
            <a href="{{ route('services.water') }}">
                <i class="fa fa-tint"></i> Water and Wastewater Engineering
            </a>
        </li>
        <li class="{{ request()->routeIs('services.buildings') ? 'active' : '' }}">
            <a href="{{ route('services.buildings') }}">
                <i class="fa fa-building"></i> Buildings Engineering
            </a>
        </li>
        <li class="{{ request()->routeIs('services.infrastructure') ? 'active' : '' }}">
            <a href="{{ route('services.infrastructure') }}">
                <i class="fa fa-road"></i> Infrastructure and Transportation
            </a>
        </li>
        <li class="{{ request()->routeIs('services.architectural') ? 'active' : '' }}">
            <a href="{{ route('services.architectural') }}">
                <i class="fa fa-pencil-square-o"></i> Architectural Design and BIM
            </a>
        </li>
        <li class="{{ request()->routeIs('services.structural') ? 'active' : '' }}">
            <a href="{{ route('services.structural') }}">
                <i class="fa fa-cubes"></i> Structural Engineering and BIM
            </a>
        </li>
        <li class="{{ request()->routeIs('services.scan') ? 'active' : '' }}">
            <a href="{{ route('services.scan') }}">
                <i class="fa fa-qrcode"></i> SCAN to BIM
            </a>
        </li>
        <li class="{{ request()->routeIs('services.mep') ? 'active' : '' }}">
            <a href="{{ route('services.mep') }}">
                <i class="fa fa-cogs"></i> MEP and Civil Engineering
            </a>
        </li>
        <li class="{{ request()->routeIs('services.industrial') ? 'active' : '' }}">
            <a href="{{ route('services.industrial') }}">
                <i class="fa fa-industry"></i> Industrial, Oil & Gas Services
            </a>
        </li>
    </ul>
</aside>
