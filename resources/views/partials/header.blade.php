<header>
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-12">
          <nav class="navbar navbar-expand-md navbar-light my_links">
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> --}}
            <div class="my_ul">
              <ul class="navbar-nav d-flex justify-content-between align-items-center">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('home') }}"><span>Home</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('chi-sono') }}"><span>Chi Sono</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('projects.index') }}"><span>Progetti</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('hobby') }}"><span>Hobby</span></a>
                </li>
              </ul>
            </div>
            <div class="my_ul_icon">
              <ul class="m-0 d-flex justify-content-between align-items-center">
                <li>
                  <a class="nav-link" href="{{ route('home') }}">
                    <div class="button_icon">
                      <i class="fas fa-home"></i>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="{{ route('chi-sono') }}">
                    <div class="button_icon">
                      <i class="fas fa-user-ninja"></i>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="{{ route('projects.index') }}">
                    <div class="button_icon">
                      <i class="fas fa-object-group"></i>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="{{ route('hobby') }}">
                    <div class="button_icon">
                      <i class="fas fa-gamepad"></i>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
</header>
