<header class="fixed-top box-shdow">
    <div class="container">
        <div class="row">
            <div class="offset-lg4-12 col-lg-12 col-md-12 col-sm-12">
                <nav class="navbar navbar-expand-lg ">
                    <a class="navbar-brand" href="/"><img src="{{asset('assets/images/Group%2031.svg')}}" alt="">
                    </a>
                    <a class="login-btn mobile-btn" type="submit"><img src="{{asset('assets/images/login-small.png')}}"> Log in</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav  justify-content-center mx-auto mb-2 mb-lg-0 list-group list-group-horizontal">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">About us <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Patients</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('ourpackage')}}">Health Packages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Careers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">FAQ’s</a>
                            </li>
                        </ul>
                    </div>
                    <a class="login-btn hidden-btn" type="submit" href="login.html"> <img src="{{asset('assets/images/login-small.png')}}"> Log in</a>
                </nav>
            </div>
        </div>
    </div>
</header>