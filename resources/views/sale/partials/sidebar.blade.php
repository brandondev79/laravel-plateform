<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="logo">
        <a href="{{ route('sale.home') }}">
            <img src="{{ URL::asset('img/logo.png') }}" alt="Logo">
        </a>
    </div>
    <div class="account">
        <img class="account-avatar" src="{{ URL::asset('img/mark.png') }}" alt="avatar">
        <p class="account-name">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</p>
        <p class="account-role">Commercial</p>
    </div>
    <ul class="nav">
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"><span>Déconnexion</span></a>
        </li>
    </ul>
</nav>