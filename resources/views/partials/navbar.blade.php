<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">

    <a class="navbar-brand" href="/" style="font-size: 1.5rem">MEDIPETIKA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto gap-5">
        @can('admin')
        <li class="nav-item">
          <a class="nav-link {{ ($title === "AdminBoard") ? 'active' : '' }}" href="/adminboard">Adminboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Data Siswa") ? 'active' : '' }}" href="/data-siswa">Data Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Hasil Belajar") ? 'active' : '' }}" href="/hasil-belajar">Hasil Belajar</a>
        </li>
        @endcan
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Courses") ? 'active' : '' }}" href="/course">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
        </li>
      </ul>
      

      <ul class="navbar-nav ms-auto">

        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->username }}
            </a>
            <ul class="dropdown-menu">
              <li><!--mau ngasih lingkaran profile dan namanya dan status as studentnya-->
                
                <div class="profile">
                  <div class="d-grid gap-3 col-5 mx-auto p-2">
                    <img src="{{ URL('img\user_1144760.png') }}">
                  </div>
                  <h5 class="text-center">{{ auth()->user()->name }}</h5>
                  <p class="text-center"> (student) </p>
                </div>

              </li>

              <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>

              <li><hr class="dropdown-divider"></li>
              
              <li><a class="dropdown-item" href="/about">About Us</a></li>

              <li><hr class="dropdown-divider"></li>

              <li> 
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </li>
              
            </ul>
          </li> 
          
        @else

          <li class="nav-item">
            <a href="/login" class="nav-link" ><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>

        @endauth
        
      </ul>
    </div>
  </div>
</nav>