<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <i class="fas fa-drumstick-bite"></i> Richeese Chicken
    </a>

    <div class="d-flex align-items-center">
      <li class="nav-item dropdown user-menu list-unstyled">
        <a href="#" class="nav-link d-flex align-items-center" data-bs-toggle="dropdown">
          <img 
            src="{{ asset('img/Affan.jpg') }}" 
            class="user-image img-circle elevation-2 rounded-circle" 
            alt="Image" 
            width="32" height="32"
          >
          <span class="d-none d-md-inline ms-2">
            {{ Auth::check() ? Auth::user()->name : 'Guest' }}
          </span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-sign-in-alt me-2"></i>Login</a></li>
        </ul>
      </li>
    </div>
  </div>
</nav>