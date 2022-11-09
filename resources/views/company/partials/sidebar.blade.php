<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="logo">
        <a href="{{ route('company.home') }}">
            <img src="{{ URL::asset('img/logo.png') }}" alt="Logo">
        </a>
    </div>
    <div class="account">
        <img class="account-avatar" src="{{ URL::asset('img/mark.png') }}" alt="avatar">
        <p class="account-name">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</p>
        <p class="account-role">{{ ucfirst(Auth::user()->role()) }}</p>
    </div>
    <ul class="nav">
        <li class="nav-item {{ is_route('company.home') ? 'active' : '' }}">
            <a href="{{ route('company.home') }}" class="nav-link"><span>Les profils</span></a>
        </li>
        <li class="nav-item {{ is_route('company.templates') ? 'active' : '' }}">
            <a href="{{ route('company.templates') }}" class="nav-link"><span>Les templates de CV</span></a>
        </li>
        <li class="nav-item {{ is_route('company.settings') ? 'active': '' }}">
            <a href="{{ route('company.settings') }}" class="nav-link"><span>Réglages</span></a>
        </li>
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"><span>Déconnexion</span></a>
        </li>
    </ul>
</nav>