<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <h5 style="padding-top: 15px; color: black">Domos y Ensambles</h5>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/') }}" class="small-sidebar-text">
            <img class="navbar-brand-full" src="{{ asset('img/logo.ico') }}" width="45px" alt=""/>
        </a>
    </div>
    <ul class="sidebar-menu">
        @include('layouts.menu')
    </ul>
</aside>
