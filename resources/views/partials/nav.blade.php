<nav class="navbar navbar-dark navbar-expand-lg bg-primary">
    <div class="container flex justify-content-between">
      <a class="navbar-link" href="{{ route ('home') }}">
        <img class="h-32px" src="{{ url('assets/images/Logo-white.png') }}" alt="Logo Laracuss"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-o mx-large-3 text-nowrap">
          {{-- mx = margin kiri kanan, mx-large = margin kiri kanan desktop --}}
          <li class="nav-item d-block d-lg-none d-xl-block" >
            {{-- d-block=display item, d-lg-none= display hilang sementara, d-xl-block= display tampil ukuran full desktop  --}}
            <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" aria-current="page" href="{{ route ('home') }}">Home</a>
          </li>
          <li class="nav-item d-block d-lg-none d-xl-block" >
          {{-- d-block=display item, d-lg-none= display hilang sementara, d-xl-block= display tampil ukuran full desktop  --}}
            <a class="nav-link {{ Route::currentRouteName() === 'discussions.index' ? 'active' : '' }}"  href="{{ route('discussions.index') }}">Discussions</a>
          </li>
          <li class="nav-item d-block d-lg-none d-xl-block" >
            {{-- d-block=display item, d-lg-none= display hilang sementara, d-xl-block= display tampil ukuran full desktop  --}}
            <a class="nav-link"  href="#">About Us</a>
          </li>
        </ul>
        <form class="d-flex w-100 me-4 my-2 my-lg-0" role="search" action="#" method="GET">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0"><img src="{{ url('assets/images/Magnifier.png') }}" alt="Search"></span>
                <input class="form-control border-start-0 ps-0" type="search" placeholder="Search" aria-label="Search" name="" value="">
            </div>
        </form>
        <ul class="navbar-nav ms-auto my-2 my-lg-0">
          {{-- margin kiri auto, margin atas-bawah 2, desktop atas bawah 0 --}}
          @auth
            <li class="nav-item my-auto dropdown">
              <a class="nav-link p-0 align-items-center d-flex" href="javascript:;" data-bs-toggle="dropdown">
                <div class="avatar-nav-wrapper me-2">
                  <img src="{{ Storage::url(auth()->user()->picture) }}" 
                  alt="{{ auth()->user()->username }}" class="avatar-rounded-circle">
                </div>
                <span class="fw-bold">{{ auth()->user()->username }}</span>
              </a>
            </li>
          @endauth
          @guest      
            <li class="nav-item my-auto">
              <a class="nav-link text-nowrap {{ Route::currentRouteName() === 'login.show' ? 'active' : '' }}"  href="{{ route('login.show') }}">Log In</a>
            </li>
            <li class="nav-item ps-1 pe-0">
              <a class="btn btn-primary-white"  href="{{ route('sign-up.show') }}">Sign Up</a>
            </li>
          @endguest
        </ul>
      </div>
    </div>
</nav>