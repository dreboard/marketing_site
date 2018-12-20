<ul class="sidebar navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Tools</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Template Screens:</h6>
            <a class="dropdown-item" href="{{ url('templates/new') }}">New</a>
            <a class="dropdown-item" href="{{ route('profile') }}">Saved</a>
            <a class="dropdown-item" href="{{ route('profile') }}">Custom</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Tools:</h6>
            <a class="dropdown-item" href="{{ url('admin/video_home') }}">Video</a>
            <a class="dropdown-item" href="{{ url('admin/template_new') }}">Marketing</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('profile') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>
    @if(Auth::user()->level < 4)
        <li class="nav-item">
            <a class="nav-link" href="{{ url('front/upgrade') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>Upgrade</span></a>
        </li>
    @endif

</ul>