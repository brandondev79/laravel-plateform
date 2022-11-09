<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="logo">
        <a href="{{ route('admin.home') }}">
            <img src="{{ URL::asset('img/logo.png') }}" alt="Logo">
        </a>
    </div>
    <div class="account">
        <img class="account-avatar" src="{{ URL::asset('img/mark.png') }}" alt="avatar">
        <p class="account-name">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</p>
        <p class="account-role">{{ ucfirst(Auth::user()->role()) }}</p>
    </div>
    <ul class="nav">
        <li class="nav-item {{ is_route('admin.home') ? 'active' : '' }}">
            <a href="{{ route('admin.home') }}" class="nav-link"><span>Les profils</span></a>
        </li>
        <li class="nav-item {{ is_route('admin.templates') ? 'active': '' }}">
            <a href="{{ route('admin.templates') }}" class="nav-link"><span>Les templates de CV</span></a>
        </li>
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"><span>Déconnexion</span></a>
        </li>
    </ul>
</nav>