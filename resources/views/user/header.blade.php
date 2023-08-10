<header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +254 114 054 216</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> jerryjuma@mail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="home"><span class="text-primary">Kenyan</span>-Doctors</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        {{-- <div class="collapse navbar-collapse md:text-gray-600" id="navbarSupport"> --}}
            <ul class="navbar-nav ml-auto">

                <li class="nav-item active">
                  <a class="nav-link" href="home">Home</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#footer">Contact</a>
                </li>


            @if (Route::has('login'))

            @auth

            <li class="nav-item">
                <a class="nav-link bg-gray-700 text-white rounded-sm" href="{{url('my_appointment')}}">My Appointment</a>
              </li>

            <x-app-layout>
            </x-app-layout>

            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{Route('login')}}">Login</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
              </li>


          @endauth

          @endif
          </ul>
        {{-- </div> --}}


      </div><!-- .container -->
    </nav>
  </header>

