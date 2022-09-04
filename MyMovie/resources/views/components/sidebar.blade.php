
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">MyMovie</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Movie Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#movie"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Movie</span>
        </a>
        <div id="movie" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Movie Menu :</h6>
                <a class="collapse-item" href="{{ route('movie-index') }}">Data table</a>
                <a class="collapse-item" href="{{ route('poster') }}">Movie Poster</a>
                <a class="collapse-item" href="{{ route('movie-create') }}">Create Data</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#genre"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Genre</span>
        </a>
        <div id="genre" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Genre Menu :</h6>
                <a class="collapse-item" href="{{ route('genre-index') }}">Data table</a>
                <a class="collapse-item" href="{{ route('genre-create') }}">Create Data</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ratingusia"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-folder"></i>
            <span>Rating Usia</span>
        </a>
        <div id="ratingusia" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Rating Usia Menu :</h6>
                <a class="collapse-item" href="{{ route('rating_usia-index') }}">Data table</a>
                <a class="collapse-item" href="{{ route('rating_usia-create') }}">Create Data</a>
            </div>
        </div>
    </li>
    
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>