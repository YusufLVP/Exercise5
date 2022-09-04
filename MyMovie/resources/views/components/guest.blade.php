<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>



    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <div class="d-flex">



        <div class="topbar-divider d-none d-sm-block"></div>
        <form action="{{ route('register') }}"class="mt-2 mr-2">
            @csrf
            <button type="submit" class="btn btn-light">Register</button>
        </form>
        <form action="{{ route('login') }}"class="mt-2">
            @csrf
            <button type="submit" class="btn btn-light">Login</button>
        </form>
        </div>


    </ul>

</nav>
<!-- End of Topbar -->
