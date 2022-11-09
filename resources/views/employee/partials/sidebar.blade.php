<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="logo">
        <a href="{{ route('employee.home') }}">
            <img src="{{ URL::asset('img/logo.png') }}" alt="Logo">
        </a>
    </div>
    <ul class="nav">
        <li class="nav-item {{ is_route('employee.home') ? 'active' : '' }}">
            <a href="{{ route('employee.home') }}" class="nav-link"><span>Mon profil</span></a>
        </li>
        <li class="nav-item {{ is_route('employee.skill') ? 'active' : '' }}">
            <a href="{{ route('employee.skill') }}" class="nav-link"><span>Mes compétences</span></a>
        </li>
        <li class="nav-item {{ is_route('employee.mission') ? 'active' : '' }}">
            <a href="{{ route('employee.mission') }}" class="nav-link"><span>Mes missions</span></a>
        </li>
        <li class="nav-item {{ is_route('employee.formation') ? 'active' : '' }}">
            <a href="{{ route('employee.formation') }}" class="nav-link"><span>Mes formations</span></a>
        </li>
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"><span>Déconnexion</span></a>
        </li>
    </ul>
</nav>